<?php
	
	$name = $_FILES['userFile']['name'];
	$loc = 'uploads/';
	
	if(isset($name))
	{
		if(!empty($name))
		{
			$tmp_name =  $_FILES['userFile']['tmp_name'];
			
			if(move_uploaded_file($tmp_name, $name))
			{
				uploader();
			}
			else{
				echo 'file couldn\'t be uploaded';
			}
		}
		else{
			echo 'No file was selected.';
		}
	}
	
	function uploader() {
		if ($_SERVER['REQUEST_METHOD'] === "POST") {
			//include the following 2 files
			require 'PHPExcel/PHPExcel.php';
			require("db_configuration.php");
			require_once 'PHPExcel/PHPExcel/IOFactory.php';
			
				$name = $_FILES['userFile']['name'];
				$loc = 'uploads/';
	
			$filePath = $loc.$name;
			// Create new PHPExcel object
			$objPHPExcel = PHPExcel_IOFactory::load(basename($filePath));
			 
			$dataArr = array();
			 
			foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
					$worksheetTitle     = $worksheet->getTitle();
					$highestRow         = $worksheet->getHighestRow(); 
					$highestColumn    = $worksheet->getHighestColumn();
					$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
					echo "<p>number of rows :" . $highestRow . "</p>";
					echo "<p>number of columns :" . $highestColumn . "</p>";
					echo "<p>number of columns :" . $highestColumnIndex . "</p>";
					 
					for ($row = 1; $row <= $highestRow; ++ $row) {
						//echo "<p>row: " . $row . "</p>";
						echo "<br/>";
							for ($col = 0; $col < $highestColumnIndex; ++ $col) {
									$cell = $worksheet->getCellByColumnAndRow($col, $row);
									$val = $cell->getValue();
									$dataArr[$row][$col] = $val;
							}
					}
			}
			$query = "DROP TABLE IF EXISTS word_list";
			$result = $db->prepare($query);
			$result->execute();
			
			$query = "
							 CREATE TABLE word_list 
							 (
								  topic varchar(20) DEFAULT NULL,
								  image varchar(20) DEFAULT NULL,
								  english varchar(20) NOT NULL,
								  telugu varchar(20) DEFAULT NULL,
								  hindi varchar(20) DEFAULT NULL,
								  kannada varchar(20) DEFAULT NULL,
								  gujarathi varchar(20) DEFAULT NULL,
								  malayalam varchar(20) DEFAULT NULL,
								  telugu_in_english varchar(20) DEFAULT NULL,
								  english_in_telugu varchar(20) DEFAULT NULL,
								  hindi_in_english varchar(20) DEFAULT NULL,
								  english_in_hindi varchar(20) DEFAULT NULL,
								  kannada_in_english varchar(20) DEFAULT NULL,
								  english_in_kannada varchar(20) DEFAULT NULL,
								  gujarathi_in_english varchar(20) DEFAULT NULL,
								  english_in_gujarathi varchar(20) DEFAULT NULL,
								  malayalam_in_english varchar(20) DEFAULT NULL,
								  english_in_malayalam varchar(20) DEFAULT NULL
							)    ENGINE=InnoDB DEFAULT CHARSET=utf8;";
			$result = $db->prepare($query);
			$result->execute();
			
			unset($dataArr[1]); // first row not needed
			$i = 0;
			foreach($dataArr as $val){
				$query = "INSERT INTO word_list (topic, image, english, telugu, hindi, kannada, gujarathi, malayalam, telugu_in_english, english_in_telugu, hindi_in_english, english_in_hindi, kannada_in_english, english_in_kannada, gujarathi_in_english, english_in_gujarathi, malayalam_in_english, english_in_malayalam) VALUES ('" . processWord($val[0]) . "','" . processWord($val[1]). "','" . processWord($val[2]) . "','" . processWord($val[3]) . "','" .  processWord($val[4]) . "','" . processWord($val[5]) . "','" . processWord($val[6]) . "','" . processWord($val[7]) . "','" .  processWord($val[8]) . "','" . processWord($val[9]) . "','" . processWord($val[10]) . "','" . processWord($val[11]) . "','" .  processWord($val[12]) . "','" . processWord($val[13]) . "','" . processWord($val[14]) . "','" . processWord($val[15]) . "','" . processWord($val[16]) . "','" . processWord($val[17]) . "');";
				// echo $i++. ": ".$query. "</br></br>";
				$result = $db->prepare($query);
			    $result->execute();
			}
		}
		else {
			echo 'not submited';
		}
	}
	
	function processWord($word)
	{
		$word = str_replace("'", "\'", $word);
		return $word;
	}
	header("Location: index.php");
?>