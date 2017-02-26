<!DOCTYPE html>
<html lang="en">
<head>
  <title>word_explorer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="">
   
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
				<span class="textbar topbar"><div>Enjhbkjhvj,glish</div><div>English</div><div>English</div></span>
        <img src="ant.jpg" alt="ant" >
				<span class="textbar bottombar"><div>English</div><div>English</div><div>English</div></span>
      </div>

      <div class="item">
				<span class="textbar topbar"><div>Enjhbkjhvj,glish</div><div>English</div><div>English</div></span>
        <img src="cat.jpg" alt="bread" >
				<span class="textbar bottombar"><div>English</div><div>English</div><div>English</div></span>
      </div>
    
      <div class="item">
				<span class="textbar topbar"><div>Enjhbkjhvj,glish</div><div>English</div><div>English</div></span>
        <img src="chicken.jpg" alt="chicken" >
				<span class="textbar bottombar"><div>English</div><div>English</div><div>English</div></span>
      </div>

      <div class="item">
				<span class="textbar topbar"><div>Enjhbkjhvj,glish</div><div>English</div><div>English</div></span>
        <img src="cereal.jpg" alt="cereal" >
				<span class="textbar bottombar"><div>English</div><div>English</div><div>English</div></span>
      </div>
    </div>

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

</body>
</html>
