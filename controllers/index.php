<?php

require 'sudLygiai.php';

$sud_lygiai = $app['database']->selectAll('sudetingumo_lygiai', 'SudLygiai');
$greeting = 'Hello World';

require 'views/index.view.php';

















// require 'functions.php';
// //require 'connect.php';
// // dd($sud_lygiai);



// class Task {

// 	public $description;
// 	public $completed = false;

// 	public function __construct($description){
// 		$this->description = $description;
// 	}

// 	public function complete() {
// 		$this->completed = true;

// 	}

// 	public function isComplete(){
// 		return $this->completed;
// 	}
// }

// $tasks = [

// 	'uzduotis1' =>new Task('Go to the store'),
// 	'uzduotis2' =>new Task('Finish my screencast'),
// 	'uzduotis3' =>new Task('Clean my room'),

// ];

// $tasks['uzduotis2']->complete();

// // $task = new Task('Go to store');
// // $task->complete();

// //dd($tasks);


// $greeting = 'Hello World';

// $person = [

// 	'age' =>31,
// 	'hair' =>'brown',
// 	'career' => 'web developer',
// 	'name' => 'John'
// ];
// $person['gender'] = 'Male';

// $task = [

// 	'title' => 'Finish home work',
// 	'due' => 'today',
// 	'assigned_to' => 'Jefffrey',
// 	'completed' => false,
// 	'important' => true
// ];


// $animals = ['dog', 'cat'];

// //dd($task);
// require 'views/index.view.php';