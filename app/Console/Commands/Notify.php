<?php

namespace Castelo\Console\Commands;

use Illuminate\Console\Command;

class Notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify
							{title : Title of Notification}
							{content : Content of Notification}
							{url : URL to go when the user click on the Notificaion}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Notify users by OneSignal';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $translate = [
            'ê' => 'e',
            'á' => 'a',
            'í' => 'i',
            'ó' => 'o',
            'ç' => 'c',
            'ã' => 'a',
        ];

        $contents = [
            'en' => strtr($this->argument('content'), $translate),
            'pt' => $this->argument('content'),
        ];

        $data = [
            'headings' => ['en' => $this->argument('title')],
            'contents' => $contents,
            'url'      => $this->argument('url'),
        ];

        $response = $this->sendMessage($data);
        $return['allresponses'] = $response;
        $return = json_encode($return);
        // print("\n\nJSON received:\n");
        // print($return);
        // print("\n");
    }

    protected function sendMessage(array $data)
    {
        $onesignal = config('castelo.onesignal');

        $fields = [
            'app_id'   => $onesignal['app_key'],
            'headings' => $data['headings'],
            'contents' => $data['contents'],
            'url'      => $data['url'],
        ];

        switch ($onesignal['send_for']) {
            case 'player_ids':
                $fields['include_player_ids'] = $onesignal['for']['player_ids'];
                break;

            default:
                $fields['included_segments'] = $onesignal['for']['included_segments'];
                break;
        }

        $fields = json_encode($fields);
        // print("\nJSON sent:\n");
        // print($fields);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://onesignal.com/api/v1/notifications');
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Basic '.$onesignal['api_key'],
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }
}
