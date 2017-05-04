<!DOCTYPE html>
<html>
<head>
	<title>Using IF ELSE</title>
</head>
<body>
<h1 style="text-align: center;">THE CHINESE ZODIAC</h1>
<h3 style="text-align: center;">Using IF ELSE</h3>
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

if ($errorCount > 0) {
    echo "Please re-enter birth year.<br />\n";
}
else {
    $zodiac = " ";
    if (($year == 1912) || ($year == 1924) || ($year == 1936) ||
        ($year == 1948) || ($Year == 1960) || ($year == 1972) ||
        ($year == 1984) || ($year == 1996) || ($year == 2008) || 
        ($year == 2020)) {
        $zodiac = "rat";    
        }    
    if (($year == 1913) || ($year == 1925) || ($year == 1937) ||
        ($year == 1949) || ($Year == 1961) || ($year == 1973) ||
        ($year == 1985) || ($year == 1997) || ($year == 2009) || 
        ($year == 2021)) {
        $zodiac = "ox";    
        }    
    if (($year == 1914) || ($year == 1926) || ($year == 1938) ||
        ($year == 1950) || ($Year == 1962) || ($year == 1974) ||
        ($year == 1986) || ($year == 1998) || ($year == 2010) || 
        ($year == 2022)) {
        $zodiac = "tiger";    
        }    
    if (($year == 1915) || ($year == 1927) || ($year == 1939) ||
        ($year == 1951) || ($Year == 1963) || ($year == 1975) ||
        ($year == 1987) || ($year == 1999) || ($year == 2011) || 
        ($year == 2023)) {
        $zodiac = "rabbit";    
        }    
    if (($year == 1916) || ($year == 1928) || ($year == 1940) ||
        ($year == 1952) || ($Year == 1964) || ($year == 1976) ||
        ($year == 1988) || ($year == 2000) || ($year == 2012) ||
        ($year == 2024)) {
        $zodiac = "dragon";
        }        
    if (($year == 1917) || ($year == 1929) || ($year == 1941) ||
        ($year == 1953) || ($Year == 1965) || ($year == 1977) ||
        ($year == 1989) || ($year == 2001) || ($year == 2013) ||
        ($year == 2025)) {
        $zodiac = "snake";
        }
    if (($year == 1918) || ($year == 1930) || ($year == 1942) ||
        ($year == 1954) || ($Year == 1966) || ($year == 1978) ||
        ($year == 1990) || ($year == 2002) || ($year == 2014) ||
        ($year == 2026)) {
        $zodiac = "horse";    
        }        
    if (($year == 1919) || ($year == 1931) || ($year == 1943) ||
        ($year == 1955) || ($Year == 1967) || ($year == 1979) ||
        ($year == 1991) || ($year == 2003) || ($year == 2015) ||
        ($year == 2027)) {
        $zodiac = "goat";    
        }    
    if (($year == 1920) || ($year == 1932) || ($year == 1944) ||
        ($year == 1956) || ($Year == 1968) || ($year == 1980) ||
        ($year == 1992) || ($year == 2004) || ($year == 2016) ||
        ($year == 2028)) {
        $zodiac = "monkey";    
        }    
    if (($year == 1921) || ($year == 1933) || ($year == 1945) ||
        ($year == 1957) || ($Year == 1969) || ($year == 1981) ||
        ($year == 1993) || ($year == 2005) || ($year == 2017) ||
        ($year == 2029)) {
        $zodiac = "rooster";    
    }    
    if (($year == 1922) || ($year == 1934) || ($year == 1946) ||
        ($year == 1958) || ($Year == 1970) || ($year == 1982) ||
        ($year == 1994) || ($year == 2006) || ($year == 2018) ||
        ($year == 2030)) {
        $zodiac = "dog";    
        }    
    if (($year == 1923) || ($year == 1935) || ($year == 1947) ||
        ($year == 1959) || ($Year == 1971) || ($year == 1983) ||
        ($year == 1995) || ($year == 2007) || ($year == 2019) ||
        ($year == 2031)) {
        $zodiac = "pig";    
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
        echo "<p>You are person " . $Hits . " to enter " . $year . ".";
    }
    
}
?>

</body>
</html>