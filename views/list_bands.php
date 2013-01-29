<h2>All Bands</h2>
<table class="table">
	<thead>
		<tr>
			<th>Name</th>
			<th>Genre</th>
			<th># Albums</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php 
		// Read all lines of the CSV file into an array
		//The FILE function in php returns an array
		$lines = file('data/bands.csv',FILE_IGNORE_NEW_LINES);
		
		// Coiunter variable for line number
		$i = 0;
		
		// Iterate over the array of the lines
		foreach($lines as $line) {
			$parts = explode(',',$line);
			$name = $parts[0];
			$genre = $parts[1];
			$num_albums = $parts[2];
			
			echo'<tr>';
			echo 	"<td>$name</td>";
			echo 	"<td>$genre</td>";
			echo 	"<td>$num_albums</td>";
			echo	"<td><a href=\"./?p=form_edit_band&band=$i\"><i class=\"icon-edit\"></i>Edit</a> <a href=\"actions/delete_band.php?band=$i\"><i class=\"icon-edit\"></i>Delete</a></td>";
			echo'</tr>';
			
			$i++; // increment line number
		}
		
		?>
	</tbody>
</table>
