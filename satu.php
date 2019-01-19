<?php

function biodata(){
	$data = [
		"name" => "Rizki Kusrana",
		"address" => "Jl. Villa Santika Kel. Mampang Kec. Pancoran Mas Kota Depok",
		"hobbies" => ["Playing Game", "Travelling"],
		"is_married" => false,
		"schools" => (object) [
							"highSchool" => "Nasional Vocational High School", 
							"university" => "Gunadarma University"],
		"skills" => (object) [
							"Skill1" => "HTML, CSS, SQL = Advanced, pernah membuat portofolio website menggunakan HTML, CSS, dan framework yang ada.",
							"Skill2" => "Javascript, PHP, Python = Beginner, mengetahui syntax-syntax dasar dari bahasa pemrograman tersebut"
							]
		];
	return json_encode($data);
	}

echo (biodata());

