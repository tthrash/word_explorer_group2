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
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
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
	
	.bottombar {
		top: 90%;
	}
	
  </style>
  </head>
  <body>

	<div class="container">
		
		<form action="#" method="post">
		<center>
	  
		<span class="align">
		<input type="submit" name="telugu" alt="Telugu button" value="Telugu" class="main_buttons">
		</span>
		
		<span class="align" >
		<input type="submit" name="hindi" alt="Hindi button" value="Hindi"  class="main_buttons">
		</span>
		
		<span class="align">
		<input type="submit" name="kannada" alt="kannada button" value="Kannada" class="main_buttons">
		</span>
		
		<span class="align">
		<input type="submit" name="gujarathi" alt="Gujarathi button" value="Gujarathi" class="main_buttons">
		</span>
		
		<span class="align">
		<input type="submit" name="malayalam" alt="Malayalam button" value="Malayalam" class="main_buttons">
		</span>
		
		<span class="align">
		<input type="submit" name="all" alt="All button" value="All" class="main_buttons">
		</span>
		
		<span class="align">
	    <label for="topicSel">Select a Topic</label>
        <select class="form-control" id="topicSel" name="topic" style="width: 200px;">
			<?php
				
				$topics = $dataAccess->queryTopic();
				$tSize = sizeof($topics);
				
				for($i=0; $i<$tSize; ++$i)
				{
					echo '<option>'.$topics[$i].'</option>';
				}
				?>
        </select>
	    </span>
	    </center>
	    </br>
		</form>
		
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
					$topics = $dataAccess->getAttributes($i);
					
					if ($i == 0)
					{
						echo '<div class="item active">';
					}
					else
					{
						echo '<div class="item">';
					}
					echo  '<span class="textbar topbar"><div>'.$topics[1].'</div><div>'.$topics[2].'</div></span>
						<img src="images/'.$topics[0].'" alt="'.$topics[3].'" >
						<span class="textbar bottombar"><div>'.$topics[3].'</div><div>'.$topics[4].'</div></span>
				    </div>';
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
  </html>
