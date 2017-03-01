<?php
require('db_configuration.php');
class dataUtility
{
	private $langWordImage = array();
	private $englishInLang = array();
	private $langInEnglish = array();
	private $langWord = array();
	private $englishWord = array();
	private $gujarathiWord = array();
	private $malayalamWord = array();
	private $teluguWord = array();
	private $hindiWord = array();
	private $kannadaWord = array();
	
	
	public function getAttributes(int $i)
	{
		$attributes = array($this->langWordImage[$i], $this->englishInLang[$i], $this->langInEnglish[$i], $this->englishWord[$i], $this->langWord[$i]);
		
		// print_r($attributes);
		return $attributes;
	}
	
	public function getAltAttributes(int $i) {
		$attributes = array($this->langWordImage[$i], $this->kannadaWord[$i], $this->gujarathiWord[$i], $this->malayalamWord[$i] ,$this->teluguWord[$i], $this->englishWord[$i], $this->hindiWord[$i]);
		return $attributes;
	
	}
	
	public function setAttributes(int $key)
	{
		if($key < 0 || $key > 5)
		{
			echo 'Error --- Invalid language value';
			exit;
		}
		else
		{
			$this->queryDatabase($key);
		}
	}
	
	
		
	private function queryDatabase(int $key)
	{
		$db = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_DATABASE);
		$query = 'SELECT * FROM word_list WHERE topic=\''.$_POST['topic'].'\';';
		$result = $db->prepare($query);
		$result->execute();
		$result->store_result();
		$result->bind_result($topic, $image, $english, $telugu, $hindi, $kannada, $gujarathi, 
										$malayalam, $telugu_in_english, $english_in_telugu, 
										$hindi_in_english, $english_in_hindi, $kannada_in_english,
										$english_in_kannada, $gujarathi_in_english, $english_in_gujarathi, 
										$malayalam_in_english, $english_in_malayalam);
		
		if($key == 0)
		{
			// $this->addValues($result, $image,  $english_in_telugu, $telugu_in_english, $telugu, $english);
			while($result->fetch())
			{
				array_push($this->langWordImage, $image);
				array_push($this->englishInLang, $english_in_telugu);
				array_push($this->langInEnglish, $telugu_in_english);
				array_push($this->langWord, $telugu);
				array_push($this->englishWord, $english);
			}
		}
		else if($key == 1)
		{
			while($result->fetch())
			{
				array_push($this->langWordImage, $image);
				array_push($this->englishInLang, $english_in_hindi);
				array_push($this->langInEnglish, $hindi_in_english);
				array_push($this->langWord, $hindi);
				array_push($this->englishWord, $english);
			}
		}
		else if($key == 2)
		{
			while($result->fetch())
			{
				array_push($this->langWordImage, $image);
				array_push($this->englishInLang, $english_in_kannada);
				array_push($this->langInEnglish, $kannada_in_english);
				array_push($this->langWord, $kannada);
				array_push($this->englishWord, $english);
			}
		}
		else if($key == 3)
		{
			while($result->fetch())
			{
				array_push($this->langWordImage, $image);
				array_push($this->englishInLang, $english_in_gujarathi);
				array_push($this->langInEnglish, $gujarathi_in_english);
				array_push($this->langWord, $gujarathi);
				array_push($this->englishWord, $english);
			}
		}
		else if($key == 4)
		{
			while($result->fetch())
			{
				array_push($this->langWordImage, $image);
				array_push($this->englishInLang, $english_in_malayalam);
				array_push($this->langInEnglish, $malayalam_in_english);
				array_push($this->langWord, $malayalam);
				array_push($this->englishWord, $english);
			}
		}
		else if($key == 5)
		{
			while($result->fetch()) {
				array_push($this->langWordImage, $image);
				array_push($this->kannadaWord, $kannada);
				array_push($this->hindiWord, $hindi);
				array_push($this->gujarathiWord, $gujarathi);
				array_push($this->malayalamWord, $malayalam);
				array_push($this->teluguWord, $telugu);
				array_push($this->englishWord, $english);
			}
		}
		
	}
	private function addValues($stmt, $image, $englishInLang, $langInEnglish, $langWord, $englishWord)
	{
		while($stmt->fetch())
		{
			array_push($this->langWordImage, $image);
			array_push($this->englishInLang, $englishInLang);
			array_push($this->langInEnglish, $langInEnglish);
			array_push($this->langWord, $langWord);
			array_push($this->englishWord, $englishWord);
		}
		
	}
	
	
	
	public function queryTopic()
	{
		$db = new mysqli(DATABASE_HOST, DATABASE_USER, DATABASE_PASSWORD, DATABASE_DATABASE);
		$query = 'SELECT DISTINCT  topic FROM word_list;';
		$result = $db->prepare($query);
		$result->execute();
		$result->store_result();
		$result->bind_result($topic);
		
		$topics = array();
		while($result->fetch())
		{
			array_push($topics, $topic);
		}
		
		return $topics;
	}
	
	public function wordSize()
	{
		return sizeof($this->langWordImage);
	}
}
	$dataAccess = new dataUtility();
	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		
		if (isset($_POST['telugu']))
		{
			$dataAccess->setAttributes(0);
		} 
		else if (isset($_POST['hindi']))
		{
			$dataAccess->setAttributes(1);
		}
		else if (isset($_POST['kannada']))
		{
			$dataAccess->setAttributes(2);
		}
		else if (isset($_POST['gujarathi']))
		{
			$dataAccess->setAttributes(3);
		}
		else if (isset($_POST['malayalam']))
		{
			$dataAccess->setAttributes(4);
		}
		else
		{
			// assume all
			$dataAccess->setAttributes(5);
		}
	}
	
	function getHeaderButton($name) {
		$active = "";
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			if (isset($_POST[$name])) {
				$active = "btn_active";
			}
		}
		return '<span class="align">
						<input type="submit" name="'.$name.'" alt="'.$name.' button" value="'.ucfirst($name).'" class="main_buttons ' .$active.'">
					</span>';
	}
	
	
	function loadDefault() {
		$string = "";
		$string .= getHeaderButton('telugu');
		$string .=getHeaderButton('hindi');
		$string .=getHeaderButton('kannada');
		$string .=getHeaderButton('gujarathi');
		$string .=getHeaderButton('malayalam');
		$string .=getHeaderButton('all');
		return $string;
	}
?>