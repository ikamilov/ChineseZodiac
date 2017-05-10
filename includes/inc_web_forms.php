<!DOCTYPE html>
<html>
<head>
	<title>Web Forms</title>
</head>
<body>
<div class="dynamic">
	<h1>Web Forms</h1>
	<a href="#alphabetize_signs">Alphabetize Signs</a>
	<a href="#image_gallery">Image Gallery</a>
	<p>Web forms are created with HTML using a variety of input field types such as text fields, textareas, radio buttons, drop-down selection boxes and buttons. User input is then validated based on the type of data that is required. Input validation can be extensive depending on the application. The form can require certain fields be entered or that fields should contain only alpha characters or only numeric characters. Regular expressions can be used to verify input data that follows a pattern such as telephone numbers, email addresses and credit card numbers. Once the input is validated, the form may perform calculations for display or use server-side processing to access a database.</p>
	<h2 id="alphabetize_signs">Alphabetizing User Input</h2>
	<p>This script asks the user to input the 12 Chinese Zodiac signs separated by commas. It will check to make sure that 12 items are entered but no other editing is done. An array is built from the input using the explode function. Then the array is sorted and displayed back to the user.</p>
	<a href="AlphabetizeSigns.php">[Test the Script]</a>
	<a href="ShowSourceCode.php?source_file=AlphabetizeSigns.php">[View the Source Code]</a>
	<h2 id="image_gallery">Image Gallery</h2>
	<p>This script displays a gallery of thumbnail images for the 12 Zodiac Signs. Each is hyperlink to a larger version of the image.</p>
	<a href="ZodiacGallery.php">[Test the Script]</a>
	<a href="ShowSourceCode.php?source_file=ZodiacGallery.php">[View the Source Code]</a>

</div>

</body>
</html>