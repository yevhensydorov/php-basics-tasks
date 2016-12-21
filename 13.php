<html>
<head>
    <title>PHP lessons</title>
</head>
<body>
	<?php 
		$s = 6;
		$t = 2;
		$speed_km_per_hour = $s / $t;
		$speed_m_per_sec = $speed_km_per_hour * 1000 / 3600;
		echo "your length was $s kilometers";
		echo "<br>";
		echo "your time was $t hours";
		echo "<br>";
		echo "<br>";
		echo "so your speed is:";
		echo "<br>";
		echo "$speed_km_per_hour Kilometers per hour";
		echo "<br>";
		echo "$speed_m_per_sec Meters per second";

	?>
</body>
</html>