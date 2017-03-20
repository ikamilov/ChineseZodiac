<!DOCTYPE html>
<html>
<head>
	<title>Chinese Zodiac</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
	<?php include 'includes/inc_header.php'; ?>
	<?php include 'includes/inc_text_links.php'; ?>
	<?php 
	if (isset($_GET['page'])) {
              switch ($_GET['page']) {
                   case 'site_layout':
						include('includes/inc_site_layout.php');
                        break;
                   case 'control_structures':
                        include('includes/inc_control_structures.php');
						break;
					case 'string_functions':
     					include('includes/inc_string_functions.php');
     					break;
					case 'web_forms': 
						include('includes/inc_web_forms.php'); 
						break;
					case 'midterm_assesment':
     					include('includes/inc_midterm_assesment.php');
     					break;
					case 'state_information':
     					include('includes/inc_state_information.php');
     					break;
					case 'user_templates':
     					include('includes/inc_user_templates.php');
     					break;
					case 'final_project':
     					include('includes/inc_final_project.php');
     					break;
					case 'home_page': // A value of
                  // 'home_page' means
                  // to display the
                  // default page
					default:
     					include('includes/inc_home.php');
     					break;
     				}
     			}
    else  {// If no button has been selected, then display
         // the default page
         include('includes/inc_home.php');
     }


 ?>
	<?php include 'includes/inc_button_nav.php'; ?>

</div>

	<?php include 'includes/inc_footer.php'; ?>
	
</html>