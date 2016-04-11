<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RouteTest extends TestCase
{
    public function testRedirect()
    {
        $responses[] = $this->call('GET', '/');
        $responses[] = $this->call('GET', '/home');

		foreach ($responses as $response) {
			$this->assertEquals(302, $response->getStatusCode());
		}
    }

	public function testCanAccessWithoutAuth()
	{
		$responses[] = $this->call('GET', '/atividades');
		$responses[] = $this->call('GET', '/provas');
		$responses[] = $this->call('GET', '/auth/login');
		$responses[] = $this->call('GET', '/password/email');

		foreach ($responses as $response) {
			$this->assertEquals(200, $response->getStatusCode());
		}
	}

	public function testAuth()
	{
		$password = 'P4ssw0RD';

		$user = factory(App\User::class)->create(['password' => Hash::make($password)]);

		$this->visit('/auth/login')
			 ->see('Login')
			 ->type($user->email, 'email')
			 ->type($password, 'password')
			 ->press('Acessar')
			 ->see($user->name);

		$user->delete();
	}
}
