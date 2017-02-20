<?php
	$topic = $_POST['topic'];
	$image = $_POST['image'];
	$english = $_POST['english'];
	$telugu = $_POST['telugu'];
	$hindi = $_POST['hindi'];
	$kannada = $_POST['kannada'];
	$malayalam = $_POST['malayalam'];
	$gujarathi = $_POST['gujarathi'];
	$telugu_in_english = $_POST['telugu_in_english'];
	$english_in_telugu = $_POST['english_in_telugu'];
	$hindi_in_english = $_POST['hindi_in_english'];
	$english_in_hindi = $_POST['english_in_hindi'];
	$kannada_in_english = $_POST['kannada_in_english'];
	$english_in_kannada = $_POST['english_in_kannada'];
	$malayalam_in_english = $_POST['malayalam_in_english'];
	$english_in_malayalam = $_POST['english_in_malayalam'];
	$gujarathi_in_english = $_POST['gujarathi_in_english'];
	$english_in_gujarathi = $_POST['english_in_gujarathi'];
	
	if (strlen ($english) == 0) {
		echo 'The english word should not be empty';
		exit;
	}
	
	include 'db_configuration.php'; 

	//$query = "INSERT INTO list VALUES (".$english.",".$telugu.",".$hindi.",".$kannada.",".$malayalam.",".$gujarathi.")";
	$query = "UPDATE word_list SET gujarathi='".$gujarathi."', hindi='".$hindi."', kannada='".$kannada."', malayalam='".$malayalam."', telugu='".$telugu."', topic='".$topic."'
	, image='".$image."', telugu_in_english='".$telugu_in_english."', english_in_telugu='".$english_in_telugu."', hindi_in_english='".$hindi_in_english."', english_in_hindi='".$english_in_hindi."', kannada_in_english='".$kannada_in_english."', english_in_kannada='".$english_in_kannada."', malayalam_in_english='".$malayalam_in_english. 
	"', english_in_malayalam='".$english_in_malayalam."', gujarathi_in_english='".$gujarathi_in_english."', english_in_gujarathi='".$english_in_gujarathi."' WHERE English='".$english."'";	
	echo $query;
    $stmt = $db->prepare($query);
    //$stmt->bind_param('ssssss', $english, $telugu, $hindi, $kannada, $malayalam, $gujarathi);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo  "<p>The word inserted into the database.</p>";
    } else {
        echo "<p>An error has occurred.<br/>
              The word was not added.</p>";
		//echo mysql_errno($db) . ": " . mysql_error($db) . "\n";
    }
	
	$db->close();
	header("Location: index.php"); /* Redirect browser */
	exit();
?>