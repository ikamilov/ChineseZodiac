<!DOCTYPE html>
<html>
<head>
	<title>Using SWITCH</title>
</head>
<body>
<h1 style="text-align: center;">THE CHINESE ZODIAC</h1>
<h3 style="text-align: center;">Using SWITCH</h3>
<form name="birthYear" method="post">
	<fieldset>
		<legend style="text-align: right;">Birth Information</legend>
		<p>Year of Birth: <input type="text" name="year" /></p>
	</fieldset>
	<fieldset>
		<legend style="text-align: right;">Reset and Submit Information</legend>
		<p style="text-align: center;">
			<input type="reset" value="Clear Form"/>&nbsp;&nbsp;
			<input type="submit" name="Submit" value="Show Me My Sign">
		</p>
	</fieldset>
</form>

<?php

function displayRequired($fieldName) {
    echo "The field \"$fieldName\" is required.<br />\n";
}

function displayNotNumeric($fieldName) {
    echo "The field \"$fieldName\" should be a valid non-zero number.<br>\n";
}
function displayNotValidYear($fieldName) {
    echo "The birth year entered should be between 1912 and 2031<br>\n";
}
function validateInput($data, $fieldName) {
    global $errorCount;
    if (empty($data)) {
        displayRequired($fieldName);
        ++$errorCount;
        $retval = "";
    }
    else {
    if (is_numeric($data)) {
        if (($data >= 1912) && ($data <=2031)) {
            $retval = $data;
        }
        else {
            displayNotValidYear($fieldName);
            ++$errorCount;
            $retval = "";
        }
    }
    else {
        displayNotNumeric($fieldName);
        ++$errorCount;
        $retval = "";
    }
    }

    return($retval);
}

$year = validateInput($_POST['year'], "Year of Birth"); 

$ratArray = array("Start Date" => 1900, "End Date" => 2020, "President" => "George Washington");
$oxArray = array("Start Date" => 1901, "End Date" => 2021, "President" => "Barack Obama");
$tigerArray = array("Start Date" => 1902, "End Date" => 2022, "President" => "Dwight Eisehnower");
$rabbitArray = array("Start Date" => 1903, "End Date" => 2023, "President" => "John Adams");
$dragonArray = array("Start Date" => 1904, "End Date" => 2024, "President" => "Abraham Lincoln");
$snakeArray = array("Start Date" => 1905, "End Date" => 2025, "President" => "John Kennedy");
$horseArray = array("Start Date" => 1906, "End Date" => 2026, "President" => "Theodore Roosevelt");
$goatArray = array("Start Date" => 1908, "End Date" => 2028, "President" => "Harry Truman");
$monkeyArray = array("Start Date" => 1908, "End Date" => 2028, "President" => "Harry Truman"); 
$roosterArray = array("Sign" => "rooster", "Start Date" => 1909, "End Date" => 2029, "President" => "Grover Cleveland");
$dogArray = array("Start Date" => 1910, "End Date" => 2030, "President" => "George Walker Bush");
$pigArray = array("Start Date" => 1911, "End Date" => 2031, "President" => "Ronald Reagan");

$AnimalSigns = array("rat" => $ratArray, "ox" => $oxArray, "tiger" => $tigerArray, "rabbit" => $rabbitArray, "dragon" => $dragonArray, "snake" => $snakeArray, "horse" => $horseArray, "goat" => $goatArray, "monkey" => $monkeyArray, "rooster" => $roosterArray, "dog" => $dogArray, "pig" => $pigArray);


if ($errorCount > 0) {
    echo "Please re-enter birth year.<br />\n";
}
else {
    $zodiac = " ";
    
    switch ($year) {
        case 1912:
        case 1924:
        case 1936:
        case 1948:
        case 1960:
        case 1972:
        case 1984:
        case 1996:
        case 2008:
        case 2020:
            $zodiac = "rat";
            break;
        case 1913:
        case 1925:
        case 1937:
        case 1949:
        case 1961:
        case 1973:
        case 1985:
        case 1997:
        case 2009:
        case 2021:
            $zodiac = "ox";
            break;
        case 1914:
        case 1926:
        case 1938:
        case 1950:
        case 1962:
        case 1974:
        case 1986:
        case 1998:
        case 2010:
        case 2022:
            $zodiac = "tiger";
            break;
        case 1915:
        case 1927:
        case 1939:
        case 1951:
        case 1963:
        case 1975:
        case 1987:
        case 1999:
        case 2011:
        case 2023:
            $zodiac = "rabbit";
            break;
        case 1916:
        case 1928:
        case 1940:
        case 1952:
        case 1964:
        case 1976:
        case 1988:
        case 2000:
        case 2012:
        case 2024:
            $zodiac = "dragon";
            break;        
        case 1917:
        case 1929:
        case 1941:
        case 1953:
        case 1965:
        case 1977:
        case 1989:
        case 2001:
        case 2013:
        case 2025:
            $zodiac = "snake";
            break;    
        case 1918:
        case 1930:
        case 1942:
        case 1954:
        case 1966:
        case 1978:
        case 1990:
        case 2002:
        case 2014:
        case 2026:
            $zodiac = "horse";
            break;
        case 1919:
        case 1931:
        case 1943:
        case 1955:
        case 1967:
        case 1979:
        case 1991:
        case 2003:
        case 2015:
        case 2027:
            $zodiac = "goat";
            break;
        case 1920:
        case 1932:
        case 1944:
        case 1956:
        case 1968:
        case 1980:
        case 1992:
        case 2004:
        case 2016:
        case 2028:
            $zodiac = "monkey";
            break;
        case 1921:
        case 1933:
        case 1945:
        case 1957:
        case 1969:
        case 1981:
        case 1993:
        case 2005:
        case 2017:
        case 2029:
            $zodiac = "rooster";
            break;
        case 1922:
        case 1934:
        case 1946:
        case 1958:
        case 1970:
        case 1982:
        case 1994:
        case 2006:
        case 2018:
        case 2030:
            $zodiac = "dog";
            break;
        case 1923:
        case 1935:
        case 1947:
        case 1959:
        case 1971:
        case 1983:
        case 1995:
        case 2007:
        case 2019:
        case 2031:
            $zodiac = "pig";
            break;
    }             
    
    $CounterFile = "statistics/" . $year . ".txt";

    if (file_exists($CounterFile)) {
        $Hits = file_get_contents($CounterFile);
            ++$Hits;
}
    else
        $Hits = 1;
        
        if (file_put_contents($CounterFile, $Hits))    {    
        echo "You were born under the sign of the " . $zodiac . ".</p>";
        echo "<img src=\"images/" . $zodiac . ".jpg\"/>";                           
        echo "<p>If your Chinese Zodiac sign is the <strong> " . $zodiac;
        echo "</strong>, you share a zodiac ";
        echo "sign with President <strong>" . $AnimalSigns[$zodiac]["President"] . "</strong>.  Years of the <strong>";
        echo $zodiac . "</strong> include " . "<strong>" . $AnimalSigns[$zodiac]["Start Date"] . "</strong>";
        for ($j = ($AnimalSigns[$zodiac]["Start Date"] + 12); $j < $AnimalSigns[$zodiac]["End Date"]; $j += 12) {
            echo ", <strong>" . $j . "<strong>";
        }
        echo " and <strong>" . $AnimalSigns[$zodiac]["End Date"] . ".";
        echo "<p>You are person " . $Hits . " to enter " . $year . ".";
    }        
}
?>

</body>
</html>