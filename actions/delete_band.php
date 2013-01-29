<pre>$_POST: <?php print_r($_POST)?></pre>

<?php
session_start();

// Read file into array
$lines = file('../data/bands.csv',FILE_IGNORE_NEW_LINES);

// Replace line with new values
unset($lines[$_GET['band']]);

// Create the sring to write the file
$data_string = implode("\n",$lines);

// Write the string to hte file, overwriting the current contents
$f = fopen('../data/bands.csv','w');
fwrite($f,$data_string);
fclose($f);

$_SESSION['error'] = array(
		'text' => 'Your band has been deleted',
		'type' => 'error'
);

header('Location:../?p=list_bands');
?>