<!DOCTYPE html>
<html lang="en">
<
<head>
  <title>Midterm Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<h1>Import</h1>
	<form id="import" action="process_import.php" method='POST' enctype='multipart/form-data'>
		<fieldset>
			<input type="hidden" name="hidden"/>
			<input type='file' name='userFile' size="40" required/>
			<input name='submit' type='submit' value="submit"/>
		</fieldset>
	</form>
	 <script type="text/javascript">
    </script>
	</body>
</html>