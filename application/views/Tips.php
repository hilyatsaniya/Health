<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>css/Tips.css">     
<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-theme.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-theme.min.css">

<!-- jQuery library -->

<!-- Latest compiled JavaScript -->
<script src="<?php echo base_url();?>css/bootstrap.min.js"></script> 

    <title></title>
  </head>
  <body>
  <div class="row">
  <?php foreach ($tips as $tip) {
  ?>
    <div class="col-md-3">
      
    <!-- <section class="Grid"> -->
       <center>
       <div class="tips-1">
	     <center><h>Tips for</h></center>
       <img src="<?php echo base_url(); ?> images/pict1.png">
		   <p><?php echo $tip->judul; ?></p>
    </div>
  </center>
  <!-- </section> -->
    </div>  
  <?php  } ?>
    </div>  

<div class="pagin">
<a href="#" class="previous"> Previous</a>
<a href="#" class="next">Next</a>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>


</html>