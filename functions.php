<?php 

// function connectToDb(){
// 	try {
// 		return $pdo = new PDO('mysql:host=127.0.0.1;dbname=kacelke','root','');
// 		//echo 'we connected';
// 	} catch (PDOException $e) {
// 		die($e->getMessage());
// 	}
// }

// function fetchAllTasks($pdo){
// 	//PDO PHP Data Object
// 	$statement = $pdo->prepare('SELECT * FROM sudetingumo_lygiai');
// 	$statement->execute();
// 	// return $sud_lygiai = ($statement->fetchAll(PDO::FETCH_OBJ));
// 	return $sud_lygiai = ($statement->fetchAll(PDO::FETCH_CLASS, 'SudLygiai'));
// 	//dd($sud_lygiai);

// }




function dd($data) {
	die(var_dump($data));
}

 function age21($age){
 	if($age == 21){
 		echo "string";
 	}
 }

