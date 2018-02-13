<html>
<style>
	h1{
		font-weight:normal;
		font-size:100px;
		letter-spacing: -0.04em;
		line-height:0.88;
	}
</style>


<?php 
	$names = ['alex', 'billy', 'joe'];

	$names[] = "josh";

	foreach ($names as $name) {
		echo "$name ";
	}
	
 ?>
</html>
