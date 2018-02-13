<html>
<head>
<style>
	h1{
		line-height:0.88;
		font-weight:normal;
		font-size:10em;
	}
	h1:nth-child(3n){
		text-align:right;
	}
</style>
</head>
<body>
	<?php 
		// $number = $_GET['number'];
		// $text = $_GET['text'];

		// $counter = 1;
		// while ($counter <= $number) {
		// 	echo "<h1>" . "text " ."</h1>";
		// 	$counter++;
		// }

		$users = [
			[
				'username' => 'alex',
				'email' => 'alex@codecourse.com',
				'likes' => ['cats' , 'food']
			],
			[
				'username' => 'billy',
				'email' => 'billy@codecourse.com',
				'likes' => ['books', 'cats']
			],
			[
				'username' => 'josh',
				'email' => 'josh@codecourse.com',
				'likes' => ['reading', 'cooking']
			]
		];

		$users[1][likes][1] = "dogs";
		// echo $users[0]["likes"][1];
		// echo $users[0]['email'] . " " . $users[0][ 'username'];

		echo '<pre>' , var_dump($users) , '</pre>';



	 ?>
</body>
</html>