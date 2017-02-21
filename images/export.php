<!DOCTYPE html>
<html lang="en">
<head>
  <title>Midterm Project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php 

require_once("db_configuration.php");
require_once("PHPExcel/PHPExcel.php");

$conn = $db;
$sql = "SELECT COUNT(*) as total FROM word_list";
$result = mysqli_query($conn, $sql) or die($sql."<br/><br/>".mysql_error());

$total = mysqli_fetch_array($result);
// echo $total['total']; exit;
if($total['total'] == 0){
	echo "There is no data in the events database to export.";
	// return false;
} else {
	header("Content-Type: application/vnd.ms-excel; charset=utf-8");
	header("Content-Disposition: attachment; filename=word_list.xlsx");	



	$query = "SELECT topic, image, english, telugu, hindi, kannada, gujarathi, malayalam, telugu_in_english, english_in_telugu, hindi_in_english, english_in_hindi, kannada_in_english, english_in_kannada, gujarathi_in_english, english_in_gujarathi, malayalam_in_english, english_in_malayalam FROM word_list"; 
	$result = mysqli_query($conn, $query);
	$objPHPExcel = new PHPExcel(); 
	$objPHPExcel->setActiveSheetIndex(0); 

	$rowCount = 1; 
	$objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount,'topic');
	$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount,'image');
	$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount,'english');
	$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount,'telugu');
	$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount,'hindi');
	$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount,'kannada');
	$objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount,'gujarathi');
	$objPHPExcel->getActiveSheet()->SetCellValue('H'.$rowCount,'malayalam');
	$objPHPExcel->getActiveSheet()->SetCellValue('I'.$rowCount,'telugu_in_english');
	$objPHPExcel->getActiveSheet()->SetCellValue('J'.$rowCount,'english_in_telugu');
	$objPHPExcel->getActiveSheet()->SetCellValue('K'.$rowCount,'hindi_in_english');
	$objPHPExcel->getActiveSheet()->SetCellValue('L'.$rowCount,'english_in_hindi');
	$objPHPExcel->getActiveSheet()->SetCellValue('M'.$rowCount,'kannada_in_english');
	$objPHPExcel->getActiveSheet()->SetCellValue('N'.$rowCount,'english_in_kannada');
	$objPHPExcel->getActiveSheet()->SetCellValue('O'.$rowCount,'gujarathi_in_english');
	$objPHPExcel->getActiveSheet()->SetCellValue('P'.$rowCount,'english_in_gujarathi');
	$objPHPExcel->getActiveSheet()->SetCellValue('Q'.$rowCount,'malayalam_in_english');
	$objPHPExcel->getActiveSheet()->SetCellValue('R'.$rowCount,'english_in_malayalam');


	while($row = mysqli_fetch_array($result)){ 
	$rowCount++;
	
	$objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, $row['0']);
	$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, $row['1']);
	$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, $row['2']);
	$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, $row['3']);
	$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, $row['4']);
	$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, $row['5']);
	$objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, $row['6']);
	$objPHPExcel->getActiveSheet()->SetCellValue('H'.$rowCount, $row['7']);
	$objPHPExcel->getActiveSheet()->SetCellValue('I'.$rowCount, $row['8']);
	$objPHPExcel->getActiveSheet()->SetCellValue('J'.$rowCount, $row['9']);
	$objPHPExcel->getActiveSheet()->SetCellValue('K'.$rowCount, $row['10']);
	$objPHPExcel->getActiveSheet()->SetCellValue('L'.$rowCount, $row['11']);
	$objPHPExcel->getActiveSheet()->SetCellValue('M'.$rowCount, $row['12']);
	$objPHPExcel->getActiveSheet()->SetCellValue('N'.$rowCount,	$row['13']);
	$objPHPExcel->getActiveSheet()->SetCellValue('O'.$rowCount,	$row['14']);
	$objPHPExcel->getActiveSheet()->SetCellValue('P'.$rowCount,	$row['15']);
	$objPHPExcel->getActiveSheet()->SetCellValue('Q'.$rowCount,	$row['16']);
	$objPHPExcel->getActiveSheet()->SetCellValue('R'.$rowCount,	$row['17']);
	} 


	$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
	ob_end_clean();
	$objWriter->save('php://output');
	// $filePath = '/tmp/' . rand(0, getrandmax()) . rand(0, getrandmax()) . ".tmp";
	// $objWriter->save($filePath); 
	// readfile($filePath);
	// unlink($filePath);
}
?>
</body>
</html>