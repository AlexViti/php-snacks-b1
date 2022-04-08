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
	<h1>Snack 1</h1>
	<?php include 'php/snack1.php' ?>
	<ul>
		<?php foreach ($basketballGames as $game) : ?>
			<li>
				<?php echo $game["home"]["name"] . "-" . $game["away"]["name"] . " | " . $game["home"]["score"] . " - " . $game["away"]["score"] ?>
			</li>
		<?php endforeach; ?>
</body>
</html>