<?php session_start() ?>
<pre><?php print_r($_POST) ?></pre>
<?php 
// Validate that each piece of info was provided
if( $_POST['band_name'] != '' &&
	$_POST['band_genre'] != '' &&
	$_POST['band_numalbums'] != '') {
	
	// Add this band to the CSV file
	//(1) Open the file for wriing
	//(2) Write the new band's info to the file
	//(3) Close the file
	$f = fopen('../data/bands.csv','a');
	
	fwrite($f,"\n{$_POST['band_name']},{$_POST['band_genre']},{$_POST['band_numalbums']},");
	
	fclose($f);
	
	$_SESSION['error'] = array(
			'text' => 'Your band has been added',
			'type' => 'sucsess'
	);
	
	header('Location:../?p=list_bands');
	
} else {
	// Store submitted data into session data
	$_SESSION['POST'] = $_POST;
	
	// Redirect to the for
	header('Location:../?p=add_band');
	$_SESSION['error'] = 'Please enter all required information';
}