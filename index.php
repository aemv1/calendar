<!--
Amaryllis Medero-Vargas - Created 24 June, 2020
index.php - Lab Assignment 2
http://helios.ite.gmu.edu/~amederov/IT207/assignment2/
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type"  content="text/html; charset=UTF-8" />
	<title>Lab Assignment 2</title>
	<link rel="stylesheet" type="text/css" href="../styles.css" />
	<link rel="stylesheet" type="text/css" href="lab2styles.css" />
</head>


<body>
	<!--#include virtual="menu.php"-->
	<?php
		include('../menu.php');
	?>
	
	<div class="column2">
		<a href="../">Home</a>
		<?php
		//#include virtual="setup.xhtml"-->
			include ('setup.xhtml');

		//#include virtual="calendar.php"-->
			//include ('calendar.php');

		//#include virtual="footer.inc"
		
			readfile (  '../footer.inc' ); 		
		?>
	</div> <!--column2-->
</body>
</html>