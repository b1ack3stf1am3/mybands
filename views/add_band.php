<h2>Add a Band</h2>
<form class="form-horizontal" action="actions/add_band.php" method="post">
	<div class="control-group">
	    <label class="control-label" for="band_name">Band</label>
	    <div class="controls">
	    	<?php echo input('band_name','required')?>
	    </div>
	 </div>
	 <div class="control-group">
	    <label class="control-label" for="band_genre">Genre</label>
	    <div class="controls">
	    	<?php echo input('band_genre','required')?>
	    </div>
	 </div>
	 <div class="control-group">
	    <label class="control-label" for="band_numalbums">Album</label>
	    <div class="controls">
	    	<?php echo input('band_numalbums','required')?>
	    </div>
	 </div>
	 <div class="form-actions">
	 	<button type="submit" class="btn btn-small btn-primary" type="button">Add Band</button>
  		<button type="button" class="btn btn-small" type="button">Cancel</button>
	 </div>
</form>
