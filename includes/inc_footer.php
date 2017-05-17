<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
<footer class="footer">
	<p>&#xA9; Copyright 2017. The Chinese Zodiac.</p>
	<?php
		$prov_array = file("proverbs.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
		$proverbcount = count($prov_array);
		$index = rand(0, $proverbcount-1);
		echo "A randomly displayed Chinese proverb read from a text file<br />";
		echo $prov_array[$index]."<br />";
		echo "<img src=".getimage().">";
		function getimage() {
  			$files = glob( "images/Dragon*.jpg");
  			shuffle($files);
  			return $files['0'];
		}
	?>
</footer>
</html>