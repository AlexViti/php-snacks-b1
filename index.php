<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Php Snacks</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h2>Snack 1</h2>
	<?php include 'php/snack1.php' ?>
	<ul>
		<?php foreach ($basketballGames as $game) : ?>
			<li>
				<?php echo $game["home"]["name"] . "-" . $game["away"]["name"] . " | " . $game["home"]["score"] . " - " . $game["away"]["score"] ?>
			</li>
		<?php endforeach; ?>
	</ul>
	<h2>Snack 2</h2>

	<form action="index.php" method="get">
		<input type="text" name="name" placeholder="Name">
		<input type="text" name="age" placeholder="Age">
		<input type="text" name="email" placeholder="Email">
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

</body>
</html>