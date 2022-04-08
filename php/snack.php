<?php 
/*
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/
$basketballGames = [
	[
		"home" => [
			"name" => "Lakers",
			"score" => 100
		],
		"away" => [
			"name" => "Warriors",
			"score" => 120
		]
	],
	[
		"home" => [
			"name" => "Celtics",
			"score" => 96
		],
		"away" => [
			"name" => "Spurs",
			"score" => 85
		]
	],
	[
		"home" => [
			"name" => "Rockets",
			"score" => 137
		],
		"away" => [
			"name" => "Jazz",
			"score" => 122
		]
	],
	[
		"home" => [
			"name" => "Heat",
			"score" => 113
		],
		"away" => [
			"name" => "Bulls",
			"score" => 112
		]
	],
	[
		"home" => [
			"name" => "Nets",
			"score" => 102
		],
		"away" => [
			"name" => "Cavaliers",
			"score" => 98
		]
	],
	[
		"home" => [
			"name" => "Clippers",
			"score" => 107
		],
		"away" => [
			"name" => "Mavericks",
			"score" => 123
		]
	]
];

/*
Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/
/*
Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/
$numbers = [];
while (count($numbers) < 15) {
	$number = rand(1, 100);
	if (!in_array($number, $numbers)) {
		$numbers[] = $number;
	}
}
/*
Snack 5
*/
$paragraph = "In the year 1878 I took my degree of Doctor of Medicine of the University of London, and proceeded to Netley to go through the course prescribed for surgeons in the army. Having completed my studies there, I was duly attached to the Fifth Northumberland Fusiliers as Assistant Surgeon. The regiment was stationed in India at the time, and before I could join it, the second Afghan war had broken out. On landing at Bombay, I learned that my corps had advanced through the passes, and was already deep in the enemy’s country. I followed, however, with many other officers who were in the same situation as myself, and succeeded in reaching Candahar in safety, where I found my regiment, and at once entered upon my new duties. The campaign brought honours and promotion to many, but for me it had nothing but misfortune and disaster. I was removed from my brigade and attached to the Berkshires, with whom I served at the fatal battle of Maiwand. There I was struck on the shoulder by a Jezail bullet, which shattered the bone and grazed the subclavian artery. I should have fallen into the hands of the murderous Ghazis had it not been for the devotion and courage shown by Murray, my orderly, who threw me across a pack-horse, and succeeded in bringing me safely to the British lines.";