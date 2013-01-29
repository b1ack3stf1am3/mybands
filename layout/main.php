<?php 
// Display message if there is one in session data
if(isset($_SESSION['error'])) {
	
	echo "<div class = \"alert alert-error\">{$_SESSION['error']}</div>";
	
	unset($_SESSION['error']);
}


//Store the 'p' parameter from the QS into a variable
if(isset($_GET['p'])) {
	$p = $_GET['p'];
} else {
	$p = 'list_bands';
}


include("views/$p.php");

