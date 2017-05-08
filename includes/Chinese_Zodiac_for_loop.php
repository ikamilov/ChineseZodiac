<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$startYear = 1912;
$endYear = 2017;
$numYears = ($startYear - $endYear) + 1;
$animalsUpper = array("RAT", "OX", "TIGER", "RABBIT", "DRAGON", "SNAKE", "HORSE", "GOAT", "MONKEY", "ROOSTER", "DOG", "PIG");
$animalsLower = array("rat", "ox", "tiger", "rabbit", "dragon", "snake", "horse", "goat", "monkey", "rooster", "dog", "pig");

echo "<table align=\"center\"><tr>";

for ($i = 0; $i < 12; ++$i) {
    echo "<td align=\"center\">" . $animalsUpper[$i] . "</td>";
}

echo "</tr><tr>";

for ($i = 0; $i < 12; ++$i) {
    echo "<td align=\"center\"><img src=\"images/" . $animalsLower[$i] . ".jpg\"></td>";
}

for ($i = $startYear; $i <= $endYear; ++$i) {
    if ((($i - $startYear) % 12) == 0) {
        echo "</tr><tr>";
    }
        echo "<td align=\"center\">" . $i . "</td>";
}

echo "</tr></table>";
?>
</body>
</html>