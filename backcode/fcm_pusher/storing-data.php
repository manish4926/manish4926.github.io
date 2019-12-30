<?php

include("config/db.php");

if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$data = [
		'name' => $name
	];

	$ref = 'posts/';
	$postRef = $database->getReference($ref)->push($data);


} else {
	var_dump($_POST);
}