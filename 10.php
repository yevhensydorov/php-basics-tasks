<html>
<head>
    <title>PHP lessons</title>
</head>
<body>
	<?php 
		$day = 4;
		switch ($day) {
			case 1:
			case 2:
			case 3:
			case 4:
			case 5:
				echo "Это рабочий день";
				break;
			
			default:
				# code...
				break;
		}
	?>
</body>
</html>