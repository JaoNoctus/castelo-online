<?php

namespace Castelo\Support;

class DateHelperBrazilOutput implements DateHelperOutputInterface
{
    protected $textToday = 'Hoje';
    protected $textTomorrow = 'Amanhã';
    protected $textPast = 'Expirado';
    protected $textFormat = 'd/m/Y';

    public function output($date)
    {
        return ($date->isToday()) ? $this->textToday : (($date->isTomorrow()) ? $this->textTomorrow : (($date->isPast()) ? $this->textPast : $date->format($this->textFormat)));
    }
}
