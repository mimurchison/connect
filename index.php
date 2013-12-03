<?php 
$logged = true;
?>
<html>
<head>

	<?php
	if ($logged == true) {
		?>
			<title>Project Connect</title>
		<?php
	}
	else {
		?>
			<title>Log In</title>
		<?php
	}
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
<?php
	if($logged == true) {
		include 'views/home.php';
	}
	else {
		include 'views/login.php';
	}
?>
</body>
<script>
	function login() {
		var value = encodeURI($('input.password').val());
		$('body').load("controllers/login.php?v="+value);
	}
</script>
</html>