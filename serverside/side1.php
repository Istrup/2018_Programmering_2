<?php include 'inc/oplys.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Side 1</title>
</head>

<body>
	<h1>Side 1</h1>
	<div>
		<p>Sessionsvariable:</p>
		<p>
		<?php
			echo "loggedin: " . $_SESSION["loggedin"] . ".<br>";
		?>
		</p>
	</div>
</body>
</html>
