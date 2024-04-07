<?php


class Events {


	
	public function getEventsBetween(DateTime $start, DateTime $end): array {

		$pdo = new PDO('mysql:host=localhost;dbname=gestion_de_stage', 'root', '', [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		]);
		$sql = "SELECT * FROM evenement WHERE Date_debut BETWEEN '{$start->format('Y-m-d 00:00:00')}' AND '{$end->format('Y-m-d 23:59:59')}' ORDER BY Date_debut ASC";
		$statement = $pdo->query($sql);
		$results = $statement->fetchAll();
		return $results;
	}

	public function getEventsBetweenByDay(DateTime $start, DateTime $end): array {

		$events = $this->getEventsBetween($start, $end);
		$days = [];
		foreach ($events as $event) {

			$date = explode(' ', $event['Date_debut'])[0];

			if (!isset($days[$date])) {
				$days[$date] = [$event];
			} else {
				$days[$date][] = $event;
			}

		}

		return $days;
	}

	public function find(int $Id_evenement): array {

		$pdo = new PDO('mysql:host=localhost;dbname=gestion_de_stage', 'root', '', [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
		]);

		$result = $pdo->query("SELECT * FROM evenement WHERE Id_evenement = $Id_evenement LIMIT 1")->fetch();

		if ($result === false) {
			throw new Exception("Auccun résultat n'a été trouvé!");
		}

		return $result;
	}




}


?>