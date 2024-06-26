<?php 

class MyException extends Exception { }

class Month {

	public $days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
	private $months = ['Janvier','Fevrier','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'];
	public $month;
	public $year;
	
	public function __construct(?int $month = null, ?int $year = null) {

		if ($month === null) {
			$month = intval(date('m'));
		}

		if ($year === null) {
			$year = intval(date('Y'));
		}

		if ($month < 1 || $month > 12) {
			throw new Exception("Le mois $month n'est pas valide");
		}
		if ($year < 1970) {
			throw new Exception("L'année est inférieur à 1970");
		}
		$this->month = $month;
		$this->year = $year;
	}

	public function getStartingDay(): dateTime {
		return new dateTime("{$this->year}-{$this->month}-01");
	}

	public function toString(): string {
		return $this->months[$this->month - 1].' '. $this->year;
	}

	public function getWeeks(): int { //le nombre de semaine dans le mois
		$start = $this->getStartingDay();
		$end = (clone $start)->modify('+1 month -1 day');
		//var_dump($start, $end);
		$weeks = intval($end->format('W')) - intval($start->format('W')) + 1;
		if ($weeks < 0) {
		 	//$weeks = intval($end->format('W'));
		 	$weeks = 6;
		}

		return $weeks;
	}

	public function withinMonth (dateTime $date): bool { //si le jour appartient a mois en cours
		return $this->getStartingDay()->format('y-m') === $date->format('y-m');
	}

	public function nextMonth(): Month {
		$month = $this->month + 1;
		$year = $this->year;
		if ($month > 12) {
			$month = 1;
			$year += 1;
		}
		return new Month($month, $year);
	}

	public function previousMonth(): Month {
		$month = $this->month - 1;
		$year = $this->year;
		if ($month < 1) {
			$month = 12;
			$year -= 1;
		}
		return new Month($month, $year);
	}

}

?>