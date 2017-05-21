<!DOCTYPE html>
<html>
<head>
	<title>Image Gallery</title>
</head>
<body>
<h1  style="text-align: center">Image Gallery</h1>
<p>Click a thumbnail image to see an independent view.</p>
<?php
$SignsArray = array("images/rat.jpg" => "Rat",
                    "images/ox.jpg" => "Ox",
                    "images/tiger.jpg" => "Tiger",
                    "images/rabbit.jpg" => "Rabbit",
                    "images/dragon.jpg" => "Dragon",
                    "images/snake.jpg" => "Snake",
                    "images/horse.jpg" => "Horse",
                    "images/goat.jpg" => "Goat",
                    "images/monkey.jpg" => "Monkey",
                    "images/rooster.jpg" => "Rooster",
                    "images/dog.jpg" => "Dog",
                    "images/pig.jpg" => "Pig"
                    );
echo "<p><a href=\"images/rat.jpg\"><img src=\"images/rat.jpg";
foreach ($SignsArray as $Sign) {
    echo "\" alt=\"" . $Sign . "\" height=\"40\" width=\"40\"/></a>&nbsp;&nbsp;" . $Sign . "<br /><a href=\"" . key($SignsArray) . "\"><img src=\"" . key($SignsArray);
    next($SignsArray);
}
echo "</p>";
?>


</body>
</html>