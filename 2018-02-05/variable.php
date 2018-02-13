<html>
<style>
	h1{
		font-weight:normal;
		font-size:100px;
		letter-spacing: -0.04em;
		line-height:0.88;
	}
</style>

<h1>Greetings!

<?php

$number = $_GET['number'];
$statement = $_GET['statement'];

$counter = 1;
while ($counter <= $number) {
  
  echo "Hell " . "$statement ";
  $counter++;

}

?>

Goodbye.
</h1>
</html>
