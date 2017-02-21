<?php
	
	$english = $_GET['english'];
	
	
	if (strlen ($english) == 0) {
		echo 'The english word should not be empty';
		exit;
	}
	
	include 'db_configuration.php'; 

	//$query = "INSERT INTO list VALUES (".$english.",".$telugu.",".$hindi.",".$kannada.",".$malayalam.",".$gujarathi.")";
	$query = "DELETE FROM word_list WHERE english='".$english."'";	
    $stmt = $db->prepare($query);
    //$stmt->bind_param('ssssss', $english, $telugu, $hindi, $kannada, $malayalam, $gujarathi);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo  "<p>The book deleted from the database.</p>";
    } else {
        echo "<p>An error has occurred.<br/>
              The word was not deleted.</p>";
		//echo mysql_errno($db) . ": " . mysql_error($db) . "\n";
    }
	
	$db->close();
	header("Location: index.php"); /* Redirect browser */
	exit();
?>