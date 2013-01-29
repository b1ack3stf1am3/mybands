<?php 
$lines = file('data/bands.csv',FILE_IGNORE_NEW_LINES);

// Get the band associated with the 'band' parameter in the QS
$band = explode(',',$lines[$_GET['band']]);

?>

<h2>Edit a Band</h2>
<form class="form-horizontal" action="actions/edit_band.php" method="post">
	<input type="hidden" name="linenum" value="<?php  echo $_GET['band'] ?>" />
	<div class="control-group">
	    <label class="control-label" for="band_name">Band</label>
	    <div class="controls">
	    	<?php echo input('band_name','required', $band[0])?>
	    </div>
	 </div>
	 <div class="control-group">
	    <label class="control-label" for="band_genre">Genre</label>
	    <div class="controls">
	    	<?php echo input('band_genre','required', $band[1])?>
	    </div>
	 </div>
	 <div class="control-group">
	    <label class="control-label" for="band_numalbums">Album</label>
	    <div class="controls">
	    	<?php echo input('band_numalbums','required',$band[2])?>
	    </div>
	 </div>
	 <div class="form-actions">
	 	<button type="submit" class="btn btn-small btn-primary" type="button">Edit Band</button>
  		<button type="button" class="btn btn-small" type="button">Cancel</button>
	 </div>
</form>
