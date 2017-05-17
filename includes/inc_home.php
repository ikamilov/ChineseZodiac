<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php  include ('includes/inc_home_links_bar.php'); ?>
<?php 

	if (isset($_GET['section'])) {
     switch ($_GET['section']) {
     	case 'zodiac':
     		include('includes/inc_chinese_zodiac.php');
     		break;
		case 'php': // A value of 'php' means
            // to display the default page
		default:
     		include('includes/inc_php_info.php');
     		break;
     	}
     }
     else {
     	// If no section has been selected, then display the
     // default page
     	include('includes/inc_php_info.php');
     }

 ?>
</body>
</html>