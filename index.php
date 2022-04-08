<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Php Snacks</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<?php include 'php/snack.php' ?>

<body>
	<section>
		<h2>Snack 1</h2>
		<ul class="basketball-games">
			<?php foreach ($basketballGames as $game) : ?>
				<li>
					<?php echo $game["home"]["name"] . " - " . $game["away"]["name"] . " | " . $game["home"]["score"] . " - " . $game["away"]["score"] ?>
				</li>
			<?php endforeach; ?>
		</ul>
	</section>

	<section>
		<h2>Snack 2</h2>
		<form action="index.php" method="get">
			<input type="text" name="name" placeholder="Name">
			<input type="number" name="age" placeholder="Age">
			<input type="email" name="email" placeholder="Email">
			<button type="submit">Submit</button>
		</form>
		
		<div class="result">
			<?php if (isset($_GET["name"]) && isset($_GET["age"]) && isset($_GET["email"])) : ?>
				<?php if (strlen($_GET["name"]) > 3 && is_numeric($_GET["age"]) && filter_var($_GET["email"], FILTER_VALIDATE_EMAIL)) : ?>
					<p>Access granted.</p>
				<?php else : ?>
					<p>Access denied.</p>
				<?php endif; ?>
			<?php endif; ?>
		</div>
	</section>

	<section>
		<h2>Snack 4</h2>
		<ol>
			<?php foreach ($numbers as $number) : ?>
				<li>
					<?php echo $number ?>
				</li>
			<?php endforeach; ?>
		</ol>
	</section>

	<section>
		<h2>Snack 5</h2>
		<h3>Original paragraph:</h3>
		<p><?php echo $paragraph ?></p>
	
		<h3>Splitted paragraph at every dot:</h3>
		<?php foreach (explode(".", $paragraph) as $sentence) : ?>
			<p class="sentence"><?php echo $sentence . "." ?></p>
		<?php endforeach; ?>
	</section>
</body>
</html>