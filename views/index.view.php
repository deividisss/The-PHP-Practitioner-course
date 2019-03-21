<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title></title>
</head>
<body>

	<nav>
		<ul>
			<li><a href="">Home</a></li>
			<li><a href="about">About</a></li>
			<li><a href="about/culture">About-Culture</a></li>
			<li><a href="contact">Contact</a></li>
		</ul>
	</nav>

	<header>
		<h1><?= $greeting; ?></h1>
	</header>

	<ul>
		<?php foreach ($sud_lygiai as $sudetingumo_lygis) : ?>
			<li><strong><?=$sudetingumo_lygis->id ?></strong> 
				<?=$sudetingumo_lygis->sudetingumo_lygis;?>
			</li>
		<?php endforeach; ?>
	</ul>


	<ul>
		<?php foreach ($tasks as $tasksI) : ?>
			<li><?= $tasksI->description ?></li>
			<li><?= $tasksI->completed ? 'Complete &#9989' : 'Incomplete &#10060' ?></li>
		<?php endforeach ?>
	</ul>


	<ul>
		<?php foreach ($task as $key => $feature) : ?>
			<li><strong><?= ucwords($key) ?> </strong><?= $feature ?></li>
		<?php endforeach; ?>
	</ul>

	<ul>
			<li><strong>Ttile </strong><?= $task['title'] ?></li>
			<li><strong>Due </strong><?= $task['due'] ?></li>
			<li><strong>Assigned to </strong><?= $task['assigned_to'] ?></li>
			<li>
				<strong>Completed </strong>
				<?= $task['completed'] ? 'Complete &#9989' : 'Incomplete &#10060' ?>
			</li>
			<li>
				<strong>Completed </strong>

				<?php if ($task['completed']) : ?>
					<span class="icon">Completed &#9989;</span>
				<?php else : ?>
					<span class="icon">Incomplete &#10060;</span>
				<?php endif ?>
			 </li>	
			 <li>
				<strong>Important </strong>

				<?php if ($task['important']) : ?>
					<span class="icon">Important &#9989;</span>
				<?php else : ?>
					<span class="icon">Not important &#10060;</span>
				<?php endif ?>
			 </li>
	</ul>
</body>
</html>