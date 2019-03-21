<?php


require 'core/bootstrap.php';

// $router = new Router;

// require 'routes.php';

//methods chaining
require Router::load('routes.php')
	->direct(Request::uri());


//php -S localhost:8887


// For people that uses wamp, the routing does not work because it adds extra artifacts to the link: 'foldername/index/contact', so you need to add extra 'index' in the routes.php like this: 'index' => 'controllers/index.php', 'index/about' => 'controllers/about.php',..etc and of course change the view links in index.view.php like this "/foldername/index/about" .The last thing you need to change is the way it gets the link, by removing part of it with substr() so it gets only the "index/about" part. substr takes 2 parameters the values and the number of characters you want to remove: $char = substr($_SERVER['REQUEST_URI'], 6); return $uri = rtrim($char, '/'); I didn't manage to make wamp remove the 'index' so I added it in the code to make it work. Good luck.


