<?php

include 'db_configuration.php'; 

$query = "SELECT * FROM word_list";
$stmt = $db->prepare($query);
//$stmt->bind_param('s', $searchterm);  
$stmt->execute();
$stmt->store_result();

$stmt->bind_result($topic, $image, $english, $telugu, $hindi, $kannada, $gujarathi, $malayalam, $telugu_in_english, $english_in_telugu, $hindi_in_english, $english_in_hindi, $kannada_in_english, $english_in_kannada, $gujarathi_in_english, $english_in_gujarathi, $malayalam_in_english, $english_in_malayalam);


  
?>

<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/style.css" type="text/css">
   <title>Word Explorer Group 3</title>
  </head>
  <body>
	<div class="container">
	 <div>

	</div>
	<div class="row">
		<hr />
		
		<span class="icon_align">
		<form action="add_word.php" class="center">
			<span class="icon_align"><h2>Welcome to Word Explorer</h2></span>
			<input type="image" src="images/add.jpg" alt="submit" style="width: 22px;">
		</form>
		</span>
		
		<span class="icon_align">
		<form action="import.php">
			<input type="submit" alt="import button" value="import" style="font-size: 150%;">
		</form>
		</span>
		
		<span class="icon_align">
		<form action="export.php">
			<input type="submit" alt="export button" value="export" style="font-size: 150%;">
		</form>
		</span>
		
		<div id="demo">
			<?php  
				echo "<table class='table table-striped'>\n";
				echo "<thead>";
				echo "<tr style='background: #cccccc;'>\n";
				echo "\t<th>Topic</th>\n";	
				echo "\t<th>Image</th>\n";
				echo "\t<th>English</th>\n";
				echo "\t<th>Telugu</th>\n";
				echo "\t<th>Hindi</th>\n";
				echo "\t<th>Kannada</th>\n";
				echo "\t<th>Malayalam</th>\n";
				echo "\t<th>Gujarathi</th>\n";
				echo "\t<th>Telugu in English</th>\n";
				echo "\t<th>English in Telugu</th>\n";
				echo "\t<th>Hindi in English</th>\n";
				echo "\t<th>English in Hindi</th>\n";
				echo "\t<th>Kannada in English</th>\n";
				echo "\t<th>English in Kannada</th>\n";
				echo "\t<th>Malayalam in English</th>\n";
				echo "\t<th>English in Malayalam</th>\n";
				echo "\t<th>Gujarathi in English</th>\n";
				echo "\t<th>English in Gujarathi</th>\n";
				echo "\t<th>Edit</th>\n";
				echo "\t<th>Delete</th>\n";
				echo "</tr>\n";
				echo "</thead><tbody>";
		
				while($stmt->fetch()) {				
					
					echo "<tr>\n";
						echo "<form action='edit_word.php' method='post'>\n";
						echo "\t<td>".$topic."<input type='hidden' name='topic' value='".$topic."' size='0';'></td>\n";
						echo "\t<td>".$image."<input type='hidden' name='image' value='".$image."' size='0';'></td>\n";
						echo "\t<td>".$english."<input type='hidden' name='english' value='".$english."' size='0';'></td>\n";
						echo "\t<td>".$telugu."<input type='hidden' name='telugu' value='".$telugu."' size='0';'></td>\n";
						echo "\t<td>".$hindi."<input type='hidden' name='hindi' value='".$hindi."' size='0';'></td>\n";
						echo "\t<td>".$kannada."<input type='hidden' name='kannada' value='".$kannada."' size='0';'></td>\n";
						echo "\t<td>".$malayalam."<input type='hidden' name='malayalam' value='".$malayalam."' size='0';'></td>\n";
						echo "\t<td>".$gujarathi."<input type='hidden' name='gujarathi' value='".$gujarathi."' size='0';'></td>\n";
						echo "\t<td>".$telugu_in_english."<input type='hidden' name='telugu_in_english' value='".$telugu_in_english."' size='0';'></td>\n";
						echo "\t<td>".$english_in_telugu."<input type='hidden' name='english_in_telugu' value='".$english_in_telugu."' size='0';'></td>\n";
						echo "\t<td>".$hindi_in_english."<input type='hidden' name='hindi_in_english' value='".$hindi_in_english."' size='0';'></td>\n";
						echo "\t<td>".$english_in_hindi."<input type='hidden' name='english_in_hindi' value='".$english_in_hindi."' size='0';'></td>\n";
						echo "\t<td>".$kannada_in_english."<input type='hidden' name='kannada_in_english' value='".$kannada_in_english."' size='0';'></td>\n";
						echo "\t<td>".$english_in_kannada."<input type='hidden' name='english_in_kannada' value='".$english_in_kannada."' size='0';'></td>\n";
						echo "\t<td>".$gujarathi_in_english."<input type='hidden' name='gujarathi_in_english' value='".$gujarathi_in_english."' size='0';'></td>\n";
						echo "\t<td>".$english_in_gujarathi."<input type='hidden' name='english_in_gujarathi' value='".$english_in_gujarathi."' size='0';'></td>\n";
						echo "\t<td>".$malayalam_in_english."<input type='hidden' name='malayalam_in_english' value='".$malayalam_in_english."' size='0';'></td>\n";
						echo "\t<td>".$english_in_malayalam."<input type='hidden' name='english_in_malayalam' value='".$english_in_malayalam."' size='0';'></td>\n";
						
						echo "\t<td>
									<input type='image' src='images/edit.jpg' name='english' value='".$english."' alt='submit' style='width: 22px;'>
									</td>\n";
						echo "\t</form><td>
								<input onclick='deleteWord(this)' type='image' name='english' value='".$english."'src='images/delete.jpg' style='width: 22px;'></td>\n";
						echo "";
					
					echo "</tr>\n"; 
				}
				echo "</tbody>";
				echo "</table>\n";
			?>
		
		</div>
	
	</div>
	</div>
	
    <?php 
		$stmt->free_result();
		$db->close();
	?>
	<script>
		function deleteWord(word) {
			//alert(word.value);
			var r = confirm("Would like to delete " + word.value + "?");
			if (r == true) {
				window.location="delete_word.php?english=" + word.value;
			} else {
				
			}
		}
	</script>
  </body>
  
</html>