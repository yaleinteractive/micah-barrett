<!DOCTYPE html>
<html>
<head>
<style>
	iframe{
		height:50vh;
		width:30vw;
		margin:0;
		border:none;
		display:inline-block;
	}

	iframe:nth-child(odd){
		transform:rotate(180deg);
	}

	.overlay{
		width:100vw;
		height:100vh;
		position:fixed;
		background:yellow;
		z-index:100;
		mix-blend-mode: multiply;
	}
</style>
	
</head>
<body>
	<?php 
		include '../nav.php';
	 ?>
	 <div class="overlay"></div>

	 <iframe src="http://aaa.com"></iframe>
	 <iframe src="http://bbb.com"></iframe>
	 <iframe src="http://ccc.com"></iframe>
	 <iframe src="http://ddd.com"></iframe>
	 <iframe src="http://eee.com"></iframe>
	 <iframe src="http://fff.com"></iframe>
	 <iframe src="http://ggg.com"></iframe>
	 <iframe src="http://hhh.com"></iframe>
	 <iframe src="http://iii.com"></iframe>
	 <iframe src="http://jjj.com"></iframe>
	 <iframe src="http://kkk.com"></iframe>
	 <iframe src="http://lll.com"></iframe>

</body>
</html>