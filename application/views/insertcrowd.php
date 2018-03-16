<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>INFORMASI CAMPAIGN</h2>
  <br><br>
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-3" for="email">Judul Bantuan</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" name="Judul Bantuan"  >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Target Donasi</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" name="Target Donasi">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Link Campaign (contoh: healthyhelper.com/helparie)</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" name="Link Campaign">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Deadline Campaign</label>
      <div class="col-sm-8">          
        <input type="date" class="form-control" name="Deadline Campaign" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Lokasi Penerimaan Dana</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" name="Lokasi Penerimaan Bantuan">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Cover Image</label>
      <div class="col-sm-8">          
        <input type="file" name="images" accept= ".jpg" class="form-control" id="images" name="Cover Image">
      </div>
    </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Deskripsi Singkat</label>
      <div class="col-sm-8"> 
        <textarea class="form-control" rows="4" name="Deskripsi Singkat" ></textarea>         
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-3" for="pwd">Deskripsi Lengkap</label>
      <div class="col-sm-8"> 
        <textarea class="form-control" rows="10" name="Deskripsi Lengkap"></textarea>         
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-3 col-sm-8">
        <button type="submit" class="btn btn-primary">Save & Next > </button>
      </div>
    </div>
  </form>
</div>

</body>
</html>