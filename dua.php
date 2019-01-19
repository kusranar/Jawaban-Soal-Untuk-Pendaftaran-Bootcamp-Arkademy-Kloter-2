<?php
	$lowerCase = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
	$upperCase = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
	$number = ['1','2','3','4','5','6','7','8','9','0'];
	$symbol = ['`', '~', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '-', '+', '=', '|', '\\', ']', '}', '[', '{', '\'', '"', ';', ':', '/', '?', '.', '>', ',', '<'];
	$tidakSesuai = "Gunakan kombinasi antara huruf kecil, huruf besar, nomer, dan symbol untuk username";
	

	function userName($username){
		global $lowerCase;
		$username = str_split($username);
		$caseOne = 0;
		$caseTwo = 0;
		$caseThree = 0;

		foreach ($username as $name) {
			foreach ($lowerCase as $lower) {
				if($name == $lower){
					$caseOne += 1;
				}
			}

			if($name == '_'){
				$caseTwo += 1;
			}
		}

		if(count($username) >= 8 ){
			$caseThree += 1;
		}

		if($caseOne > 0 && $caseTwo > 0 && $caseThree > 0){
			return true;
		}
		else {
			return false;
		}
	}

	function password($password){
		global $lowerCase, $upperCase, $number, $symbol;
		$password = str_split($password);
		$caseOne = 0;
		$caseTwo = 0;
		$caseThree = 0;
		$caseFour = 0;
		$caseFive = 0;

		foreach ($password as $pass) {
			foreach ($lowerCase as $lower) {
				if($pass == $lower){
					$caseOne += 1;
				}
			}
			foreach ($upperCase as $upper) {
				if($pass == $upper){
					$caseTwo += 1;
				}
			}
			foreach ($number as $numb) {
				if($pass == $numb){
					$caseThree += 1;
				}
			}
			foreach ($symbol as $sym) {
				if($pass == $sym){
					$caseFour += 1;
				}
			}
		}

		if(count($password) >= 8 ){
				$caseFive += 1;
		}

		if($caseOne > 0 && $caseTwo > 0 && $caseThree > 0 && $caseFour > 0 && $caseFive > 0){
			return true;
		}
		else {
			return false;
		}

	}

	$username = userName('$_username1');
	$password = password('$passworD1');
	
	if ($username == true && $password == true) {
		echo "Good!\nUsername Anda Kombinasi Dari Huruf Kecil, Underscore, Dan Lebih Dari 8 Karakter. \n
		Password Anda Kombinasi Dari Huruf Kecil, Huruf Besar, Angka, Karakter Special, Dan Lebih Dari 8 Karakter.";
	}
	else {
		echo "Username Dan Password Buruk \n
			Username Harus Kombinasi Dari Huruf Kecil, Underscore, Dan Lebih Dari 8 Karakter.\n
			Password Harus Kombinasi Dari Huruf Kecil, Huruf Besar, Angka, Karakter Special, Dan Lebih Dari 8 Karakter.";
	}

?>