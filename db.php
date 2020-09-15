<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "product";
	$conn = new mysqli($servername, $username, $password, $db) or die("not connect");
	echo "succes";
?>