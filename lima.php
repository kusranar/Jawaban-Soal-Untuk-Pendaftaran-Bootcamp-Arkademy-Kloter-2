<?php

function countHandshake($jumlahOrang){
	$totalHandshake = 0;
	for($i = 0; $i < $jumlahOrang; $i++){
		for($j = 1; $j < $jumlahOrang; $j++){
			$totalHandshake += 1;
		}
	}
	return $totalHandshake/2;
}
echo(countHandshake(3));