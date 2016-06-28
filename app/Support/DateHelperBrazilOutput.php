<?php

namespace Castelo\Support;

class DateHelperBrazilOutput implements DateHelperOutputInterface
{
    protected $textToday = 'Hoje';
    protected $textTomorrow = 'Amanhã';
    protected $textPast = 'Expirado';
    protected $textFormat = 'd/m/Y';
	protected $days = ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'];

    public function output($date)
    {
		if ($date->isToday()) {
			return $this->textToday;
		} elseif ($date->isTomorrow()) {
			return $this->textTomorrow;
		} elseif ($date->isPast()) {
			return $this->textPast;
		} elseif ($date->diffInDays() < 5) {
			return $this->days[$date->dayOfWeek];
		} else {
			return $date->format($this->textFormat);
		}
    }
}
