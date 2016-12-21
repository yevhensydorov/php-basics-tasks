<html>
<head>
    <title>PHP lessons</title>
</head>
<body>
	<?php 
		$name = "Yevhen";
		$age = 66;
		if ($age >= 18 AND $age <= 59) {
			echo "Вам еще работать и работать!";
		}
		else if ($age > 59) {
			echo "Вам пора на пенсию!";
		}
	?>
</body>
</html>