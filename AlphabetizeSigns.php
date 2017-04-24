<!DOCTYPE html>
<html>
<head>
	<title>Alphabetize Signs</title>
</head>
<body>
<h1 style="text-align:center">Alphabetize the 12 Chinese Zodiac Signs</h1>
<form name="zodiacSigns" method="post">
	<p>Enter the 12 Chinese Zodiac signs separated by commas: <input type="text" name="signs" size="100"/></p>
	<p>	
		<input type="reset" value="Clear Form" />&nbsp;&nbsp;
   		<input type="submit" name="Submit" value="Alphabetize Signs" />
   	</p>

</form>
<?php

$signs = ($_POST['signs']); 

$SignsArray = explode(",", $signs);

$count = count($SignsArray);

if ($count != 12)
    echo "<p>You have not entered 12 zodiac signs separated by commas.</p>";
else {

    sort($SignsArray);

    echo "<p>";

    for ($i = 0; $i < $count; ++$i) {
        echo $SignsArray[$i] . "<br />";
    }

	echo "</p>";
}

?>

</body>
</html>