<?php 

try {
	$pdo = new PDO('mysql:host=127.0.0.1;dbname=kacelke','root','');
	//echo 'we connected';
} catch (PDOException $e) {
	die($e->getMessage());
}

