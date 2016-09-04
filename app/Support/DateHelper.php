<?php

namespace App\Support;

use Carbon\Carbon;

class DateHelper
{
    protected $date;

    public function __construct(Carbon $date)
    {
        $this->date = $date;
    }

    public function output(DateHelperOutputInterface $formatter)
    {
        return $formatter->output($this->date);
    }
}
