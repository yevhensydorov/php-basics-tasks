<html>
<head>
    <title>PHP lessons</title>
</head>
<body>
	<?php 
		$day = 23;
		switch ($day) {
			case 1:
			case 2:
			case 3:
			case 4:
			case 5:
				echo "Это рабочий день";
				break;
			case 6:
			case 7:
				echo "Это выходной день";
			default:
				echo "Неизвестный день";
				break;
		}
	?>
</body>
</html>