<!DOCTYPE html>
<html>
	
  <head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
   <title>Assignment 5 - Add Word</title>
  </head>
  <body>
	<div class="container">
	<div class="row">
		<h1>Assignment 5 - Add word</h1>	
		<hr />
		<form action="process_new_word.php" method="post">
			<table class="table table-striped">
			<tr style="background: #cccccc;">
			  <td colspan="2">Add a New Word</td>			  
			</tr>
			<tr>
			  <td>Topic</td>
			  <td><input type="text" name="topic"size="20" maxlength="20"/></td>
			</tr>
			<tr>
			  <td>Image (with file extension)</td>
			  <td><input type="text" name="image"size="20" maxlength="20"/></td>
			</tr>
			<tr>
			  <td>English</td>
			  <td><input type="text" name="english" size="20" maxlength="20" required/></td>
			</tr>
			<tr>
			  <td>Telugu</td>
			  <td><input type="text" name="telugu" size="20" maxlength="20"/></td>
			</tr>
			<tr>
			  <td>Hindi</td>
			  <td><input type="text" name="hindi" size="20" maxlength="20"/></td>
			</tr>
			<tr>
			  <td>Kannada</td>
			  <td><input type="text" name="kannada"size="20" maxlength="20"/></td>
			</tr>
			<tr>
			  <td>Malayalam</td>
			  <td><input type="text" name="malayalam"size="20" maxlength="20"/></td>
			</tr>
			<tr>
			  <td>Gujarathi</td>
			  <td><input type="text" name="gujarathi"size="20" maxlength="20"/></td>
			</tr>
			<tr>
			  <td>Telugu in English</td>
			  <td><input type="text" name="telugu_in_english"size="20" maxlength="20"/></td>
			</tr>
			<tr>
			  <td>English in Telugu</td>
			  <td><input type="text" name="english_in_telugu"size="20" maxlength="20"/></td>
			</tr>
			<tr>
			  <td>Hindi in English</td>
			  <td><input type="text" name="hindi_in_english"size="20" maxlength="20"/></td>
			</tr>
			<tr>
			  <td>English in Hindi</td>
			  <td><input type="text" name="english_in_hindi"size="20" maxlength="20"/></td>
			</tr>
			<tr>
			  <td>Kannada in English</td>
			  <td><input type="text" name="kannada_in_english"size="20" maxlength="20"/></td>
			</tr>
			<tr>
			  <td>English in Kannada</td>
			  <td><input type="text" name="english_in_kannada"size="20" maxlength="20"/></td>
			</tr>
			<tr>
			  <td>Malayalam in English</td>
			  <td><input type="text" name="malayalam_in_english"size="20" maxlength="20"/></td>
			</tr>
			<tr>
			  <td>English in Malayalam</td>
			  <td><input type="text" name="english_in_malayalam"size="20" maxlength="20"/></td>
			</tr>
			<tr>
			  <td>Gujarathi in English</td>
			  <td><input type="text" name="gujarathi_in_english"size="20" maxlength="20"/></td>
			</tr>
			<tr>
			  <td>English in Gujarathi</td>
			  <td><input type="text" name="english_in_gujarathi"size="20" maxlength="20"/></td>
			</tr>
			<tr>
			<td></td>
				<td colspan="" style=""><input type="submit" value="Submit the new word" size="20"/></td>
			</tr>
			
			</table>
		</form>
	</div>
	</div>	
    
  </body>
</html>