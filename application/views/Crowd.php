
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <button type="button" class="btn btn-primary" >Galang Dana</button>
  </div>

<div class="container">
  <h2></h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active" style="background-image: url(<?php echo base_url()."images/foto1.jpg"?>);">
        <img src="foto1.jpg"  style="width:25%;">
      </div>

      <div class="item " style="background-image: url(<?php echo base_url()."images/foto2.jpg"?>);">
        <img src="foto2.jpg"  style="width:25%;">
      </div>
    
      <div class="item " style="background-image: url(<?php echo base_url()."images/foto5.jpg"?>);">
        <img src="foto5.jpg" style="width:25%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

	<br>
    <h1>Urgensi Bantuan</h1>

    <br><br>
	

<div class="container-fluid">
  
  <div class="row">
    <div class="col-sm-3">
  		<img src="images/foto4.jpg" width="304" height="236"> 
  		<center><p>Operasi Bibir Sumbing</p></center>
    </div>
    <div class="col-sm-3">
    	<img src="images/foto4.jpg" width="304" height="236"> 
  		<center><p>Operasi Katarak</p></center>
    </div>
    <div class="col-sm-3">
    	<img src="images/foto4.jpg" width="304" height="236"> 
  		<center><p>Operasi Kanker Otak</p></center>
    </div>
    <div class="col-sm-3">
    	<img src="images/foto4.jpg" width="304" height="236"> 
  		<center><p>Operasi Operasi Kanker Rahim</p></center>
    </div>
  </div>
</div>    

</body>
</html>

