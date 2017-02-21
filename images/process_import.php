<?php
	uploader();
	function uploader() {
		if ($_SERVER['REQUEST_METHOD'] === "POST") {
			//include the following 2 files
			require 'PHPExcel/PHPExcel.php';
			require("db_configuration.php");
			require_once 'PHPExcel/PHPExcel/IOFactory.php';

			// Create new PHPExcel object
			$objPHPExcel = PHPExcel_IOFactory::load(basename($_FILES['userFile']['name']));
			 
			$dataArr = array();
			 
			foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
					$worksheetTitle     = $worksheet->getTitle();
					$highestRow         = $worksheet->getHighestRow(); 
					$highestColumn      = $worksheet->getHighestColumn();
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
			$query2 = "DROP TABLE IF EXISTS word_list";
			$result = $db->prepare($query2);
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
			
			foreach($dataArr as $val){
				$query1 = "INSERT INTO word_list (topic, image, english, telugu, hindi, kannada, gujarathi, malayalam, telugu_in_english, english_in_telugu, hindi_in_english, english_in_hindi, kannada_in_english, english_in_kannada, gujarathi_in_english, english_in_gujarathi, malayalam_in_english, english_in_malayalam) VALUES ('" . $val[0] . "','" . $val[1] . "','" . $val[2] . "','" . $val[3] . "','" .  $val[4] . "','" . $val[5] . "','" . $val[6] . "','" . $val[7] . "','" .  $val[8] . "','" . $val[9] . "','" . $val[10] . "','" . $val[11] . "','" .  $val[12] . "','" . $val[13] . "','" . $val[14] . "','" . $val[15] . "','" . $val[16] . "','" . $val[17] . "')";
				$result = $db->prepare($query1);
			    $result->execute();
			}
		}
		else {
			echo 'not submited';
		}
	}
	header("Location: index.php");
?>