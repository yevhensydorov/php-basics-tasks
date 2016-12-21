<html>
<head>
    <title>PHP lessons</title>
</head>
<body>
	<?php 
		$name = "Yevhen";
		$age = 12;
		if ($age >= 18 AND $age <= 59) {
			echo "Вам еще работать и работать!";
		}
		else if ($age > 59) {
			echo "Вам пора на пенсию!";
		}
		else if ($age > 0 AND $age <= 17) {
			echo "Вам еще рано работать!";
		}
	?>
</body>
</html>