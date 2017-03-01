<?php
	require('process_word_explorer.php');
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Group 3: Word Explorer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/style.css" type="text/css">
	<script>
		function defaultImage(obj) {
			//alert(obj);
			obj.src = "images/default.jpg";
			obj.alt = "default_image";
		}
	</script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
		height: 600px;
		width: 100%;
		margin: auto;
  }
	
	.item { 
		position: relative; 
		width: 100%; /* for IE 6 */
	}
	
	
	.textbar {
		position: absolute;
    text-align:center;
		left: 5%;
		width: 90%;
	}
	
	.topbar {
		top: 3%;	
	}
	
	.textbar div {
		padding:5px;
		width:20%;
		height: 3%;
		background:green;
	}
	
	.textbar div:nth-child(1) {
		float:left;
	}
	
	.textbar div:nth-child(2) {
		display: inline-block;
    margin:0 auto;
	}
	
	.textbar div:nth-child(3) {
		float:right;
	}
	
	.firstword {
		float:left;
	}
	
	.lastword {
		float: right;
	}
	
	.bottombar {
		top: 90%;
	}
	
	.btn_active {
		background: LightGreen;
	}
	
	option[selected] {
		background: LightGreen;

	}
	
	option {
		padding:5px;
	}
	
	form {
		width:100%;
	}
  </style>
</head>
<body>
	<div class="container">
		<form action="#" method="POST">
		<?PHP
			if ($_SERVER['REQUEST_METHOD'] === 'POST') {
				echo ''.getHeaderButton('telugu');
				echo ''.getHeaderButton('hindi');
				echo ''.getHeaderButton('kannada');
				echo ''.getHeaderButton('gujarathi');
				echo ''.getHeaderButton('malayalam');
				echo ''.getHeaderButton('all');
				
				
			} else {
				echo ''.loadDefault();
			}
		?>

		<div class="row">
			<div class="col-sm-4">
				 <select multiple class="form-control" id="topicSel" name="topic">
				<?PHP 
					$topics = $dataAccess->queryTopic();
					$tSize = sizeof($topics);
					$topicValue = 0;
					if ($_SERVER['REQUEST_METHOD'] === 'POST') {
						if (isset($_POST['topic'])) {
							$topicValue = $_POST['topic'];
						}
					}
					else {
					}
					for($i=0; $i<$tSize; ++$i)
					{
						if ($topics[$i] === $topicValue) {
							echo '<option selected>'.$topics[$i].'</option>';
						}
						else {
							echo '<option>'.$topics[$i].'</option>';
						}
					}
				?>
				</select>
			</div>
			<div class="col-sm-8">
						
	  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="">
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
<!-- 		  <div class="item active">
					<span class="textbar topbar"><div>Enjhbkjhvj,glish</div><div>English</div></span>
			<img src="images/ant.jpg" alt="ant" >
					<span class="textbar bottombar"><div>English</div><div>English</div></span>
		  </div> -->
		  
		  	<?php
				
				
				$wordSize = $dataAccess->wordSize();
				for($i=0; $i<$wordSize; ++$i)
				{
					if (isset($_POST['all'])) {
						$topics = $dataAccess->getAltAttributes($i);
						//echo '<script> alert(alt attr);</script>';
					} else {
						//echo '<script> alert( attr);</script>';
						$topics = $dataAccess->getAttributes($i);
					}
					if ($i == 0)
					{
						echo '<div class="item active">';
					}
					else
					{
						echo '<div class="item">';
					}
					if (sizeof($topics) > 5) {
						echo  '<span class="textbar topbar"><div>'.$topics[1].'</div><div>'.$topics[2].'</div><div>'.$topics[3].'</div></span>
							<img src="images/'.$topics[0].'" alt="'.$topics[5].'" onerror="defaultImage(this)" >
							<span class="textbar bottombar"><div>'.$topics[4].'</div><div>'.$topics[5].'</div><div>'.$topics[6].'</div></span>
							</div>';
					}
					else {
						echo  '<span class="textbar topbar"><div class="firstword">'.$topics[1].'</div><div class="lastword">'.$topics[2].'</div></span>
							<img src="images/'.$topics[0].'" alt="'.$topics[3].'" onerror="defaultImage(this)" >
							<span class="textbar bottombar"><div class="firstword">'.$topics[3].'</div><div class="lastword">'.$topics[4].'</div></span>
							</div>';
					}
				}
				
				function checkImg()
				{
					
				}
			?>
		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		  <span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		  <span class="sr-only">Next</span>
		</a>
	  </div>
	</div>
	</div>
			</div>
		</div>
		</form>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
