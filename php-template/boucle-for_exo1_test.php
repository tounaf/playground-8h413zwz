<?php
    include 'boucle-for_exo1.php';
	
	function solution () {
		$solution = '';
		for ($i = 1 ; $i <= 10 ; $i++) {
			$solution .= "$i\t";
		 }
		 $solution .= "\n";
		 return $solution;
	}


	$_solution = solution();
	$reponse = maBoucle();
	
	if (strcmp($_solution, $reponse) == 0) {
		echo("TECHIO> success true \r\n");
	} 
	else {
		echo("TECHIO> success false  \r\n");
		echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
	}
?>