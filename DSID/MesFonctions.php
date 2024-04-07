<?php	


		//Verifie si la variable $date est au bon format date
		function isValidDate($date, $format = 'Y-m-d'){
		    $dt = DateTime::createFromFormat($format, $date);
		    return $dt && $dt->format($format) === $date;
		}


		//Verifie si la variable $time est au bon format heure
		function isValidHeure($time, $format = "H:i"){
		    $dt = DateTime::createFromFormat($format, $time);
		    return $dt && $dt->format($format) === $time;
		}



		//Verifie si $s contient des chiffres ou que des lettres
		function isan($s): string {
			for ($i = 0; $i < strlen($s); $i++){
			   $char = $s[$i];
			   if (is_numeric($char)) {
			    	// echo $char . ' is a number';  	
			   		return 'true';
			   } 
			}
			return 'false';
		}

		function isnan($s): string {
			for ($i = 0; $i < strlen($s); $i++){
			   $char = $s[$i];
			   if (!is_numeric($char)) {
			    	// echo $char . ' is a number';  	
			   		return 'false';
			   } 
			}
			return 'true';
		}

		function deltaDate($first, $last): string {
			$tempsFirst = strtotime($first);
			$tempsLast = strtotime($last);

			if ($tempsFirst >= $tempsLast) {
				return 'false';
			}
			return 'true';
		}


		function titreValid($s): string {

			

			for ($i = 0; $i < strlen($s); $i++) {

				$char = $s[$i];
				$string = '&\{}[]()|^ç$¤µ_%¨`=+/:;,?!§?*<>²~#';

			  	for ($j = 0; $j < strlen($string); $j++) { 

			  		if ($char == $string[$j]) {
			  			return 'false';
			  		}
			 	}

			}

			return 'true';
		}

		function loginValid($s): string {

			

			for ($i = 0; $i < strlen($s); $i++) {

				$char = $s[$i];
				$string = '&\{}[]()|^-_ç"µ$¤\'%¨`=+/:;,?!§?*<>²~#';

			  	for ($j = 0; $j < strlen($string); $j++) { 

			  		if ($char == $string[$j]) {
			  			return 'false';
			  		}
			 	}

			}

			return 'true';
		}

?>