<?php
    include 'boucle-while_exo1.php';
	
	function solution () {
		$solution = '';
		$i = 1;
		while ($i < 10) {
			$solution .= "$i\t";
			$i++;
		}
		$solution .= "10\n";
		return $solution;
	}


	$_solution = solution();
	$reponse = maBoucle();
	
	if (strcmp($_solution, $reponse) == 0) {
		$contents = file_get_contents("boucle-while_exo1.php");
		if (! preg_match("#(while)#",$contents)) {
			echo("TECHIO> success false  \r\n");
			echo("TECHIO> message --channel Oops! Le résultat est juste mais il fallait utiliser la boucle while.\r\n");
		} 
		else { 
			echo("TECHIO> success true \r\n");
		}
	} 
	else {
		echo("TECHIO> success false  \r\n");
		echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
	}
?>