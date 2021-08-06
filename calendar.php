<!--
Amaryllis Medero-Vargas - Created 24 June, 2020
calendar.php - Lab Assignment 2 Calendar php
http://helios.ite.gmu.edu/~amederov/IT207/assignment2/calendar.php
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type"  content="text/html; charset=UTF-8" />
	<title>Calendar - Lab Assignment 2</title>
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
<h1>Office Hours Setup Form</h1>
<form action="" method="post" name="email">
  Student Name: <input type="text" name="studentname"/>
  Student Email: <input type="text" name="from"/>
  <input type="submit" value="Submit" name="submit"/>
  <input type="reset" Value="Reset" name="reset"/>
</form>
<?php
    if(isset($_POST['studentname']) && isset($_POST['from'])){
        $submit = $_POST['submit'];
        $response = mail("To: <dgarriso@gmu.edu>", "Meeting Times", "SOME SORT OF VALUE HERE", "From: <" . $_POST['from'] . ">");
        if ($response == 1){
            echo "Email sent successfully from: " . $_POST['from'];
        }
        else{
            echo $response;
        }
    }
    else{
        $submit = null;
    }
?>
<br/>
<div id="calendarcontainer">
	<div id="monthandyear">
		<?php
			echo date("F Y");
		?>
	</div>
    <?php
    	echo "<div class='row'>";
    	$daysofweek = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    	for ($i=0; $i < sizeof($daysofweek); $i++) { 
    		echo "<div class='weekday'>" . $daysofweek[$i] . "</div>";
    	}
    	echo "</div>";
    	//number of days in month
    	$daysinmonth = date("t"); 

    	//YYYY-MM-DD first day of current month
    	$firstday = date("Y")."-".date("m")."-01"; 

    	//finds day of week that starts off current month
    	$firstdayofweek = date("l", strtotime($firstday)); 
    	$d = 1;
    	$chosentimes_monday = "";
    	$chosentimes_tuesday ="";
    	$chosentimes_wednesday="";
    	$chosentimes_thursday="";
    	$chosentimes_friday="";
    	if (array_key_exists('list_box_monday', $_POST)){
    		$chosentimes_monday = $_POST['list_box_monday'];
    	}
    	if (array_key_exists('list_box_tuesday', $_POST)){
    		$chosentimes_tuesday = $_POST['list_box_tuesday'];
    	}
    	if (array_key_exists('list_box_wednesday', $_POST)){
    		$chosentimes_wednesday = $_POST['list_box_wednesday'];
    	}
    	if (array_key_exists('list_box_thursday', $_POST)){
    		$chosentimes_thursday = $_POST['list_box_thursday'];
    	}
    	if (array_key_exists('list_box_friday', $_POST)) {
    		$chosentimes_friday = $_POST['list_box_friday'];
    	}
		
		
		$temp_chosentimes = "";

    	for ($j=0; $j < 5; $j++) { 
    		echo "<div class='row'>";
    		for ($x=0; $x < sizeof($daysofweek); $x++) {
    			echo "<div class='column'>";
    			if($firstdayofweek == $daysofweek[$x]){
    				echo $d;
    				$d++;
    				echo "<br/>";
    				if($x == 1){
    					$temp_chosentimes = $chosentimes_monday;
    				}
    				elseif ($x == 2) {
    					$temp_chosentimes = $chosentimes_tuesday;
    				}
    				elseif ($x == 3) {
    					$temp_chosentimes = $chosentimes_wednesday;
    				}
    				elseif ($x == 4) {
    					$temp_chosentimes = $chosentimes_thursday;
    				}
    				elseif ($x == 5) {
    					$temp_chosentimes = $chosentimes_friday;
    				}
    				if(!empty($temp_chosentimes)){
	    				foreach ($temp_chosentimes as $key => $value) {
	    					echo "<input type='radio'  name='selection'/>". $value."<br/>";
	    				}
    				}
    				 				
    			}
    			elseif($d != 1 && $d <= $daysinmonth){
    				echo $d;
    				$d++;
    				echo "<br/>";
    				if($x == 1){
    					$temp_chosentimes = $chosentimes_monday;
    				}
    				elseif ($x == 2) {
    					$temp_chosentimes = $chosentimes_tuesday;
    				}
    				elseif ($x == 3) {
    					$temp_chosentimes = $chosentimes_wednesday;
    				}
    				elseif ($x == 4) {
    					$temp_chosentimes = $chosentimes_thursday;
    				}
    				elseif ($x == 5) {
    					$temp_chosentimes = $chosentimes_friday;
    				}
    				if(!empty($temp_chosentimes)){
	    				foreach ($temp_chosentimes as $key => $value) {
	    					echo "<input type='radio'  name='selection'/>". $value."<br/>";
	    				}
    				}
    			}
    			else{
    				echo NULL;
    			}
    			echo "</div>";
    		}
    		echo "</div>";
    	}
    ?>
</div>
	<?php
	//#include virtual="footer.inc"
    	readfile (  '../footer.inc' );
	?>
</div>
</body>
</html>