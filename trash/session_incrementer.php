<?php
	session_start();
	$_SESSION['ma_variable'] += 1;
?>

<html>
<body>
	<?php
	echo "Ma variable de session vaut : " . $_SESSION['ma_variable'] . "\n";
	echo "<br /><a href = 'session_incrementer.php'>Incrementer</a>";
	?>
</body>
</html>