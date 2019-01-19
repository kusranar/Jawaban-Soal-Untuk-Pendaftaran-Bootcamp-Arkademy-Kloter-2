<?php 
function drawLine($panjangPersegi, $bilanganGanjil){
	for($i = 1; $i <= $panjangPersegi; $i++){
		for ($j = 1; $j <= $panjangPersegi; $j++) {
			if($i % 2 == 1 && $j % 2 == 1){
				if($i == 1 ||  $j == 1 || $i == $bilanganGanjil || $i == $panjangPersegi || ($i % 1 == 1 && $j == $bilanganGanjil)){
					echo("*");
				}
			}
			echo("&nbsp;");
			if($j == $bilanganGanjil && $i % 2 == 1){
				echo("*");
			}
		}
	echo("<br>");
	}
}

drawLine(13, 7);