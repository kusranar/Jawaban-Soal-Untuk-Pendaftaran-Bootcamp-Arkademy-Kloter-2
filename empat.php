<?php
$kata = "oceansamudra";
function gantiKata($kata1, $kata2, $kata3){
	global $kata;
	return $kata = $kata1;
}

echo(gantiKata('kelompok', 'o', 'a'));