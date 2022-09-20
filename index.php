<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
  <title>PHP File Upload</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />

</head>
<style>
  .input_form {
    font-size: 20px;
  }

  .f_border{
    border:1px solid;
    border-radius:5px;
    padding:10px;
    margin:5px;
  }
  </style>

<body>
  <?php
    if (isset($_SESSION['message']) && $_SESSION['message'])
    {
      printf('<b>%s</b>', $_SESSION['message']);
      unset($_SESSION['message']);
    }
  ?>
  <center>
    <div class="f_border">
  <form method="POST" action="upload.php" enctype="multipart/form-data">
    <div>
      <span class="input_form">Upload a File</span><br> <br>
      <label class="btn btn-primary m-5 btn-sm center-block btn-file">
  <i class="fa fa-upload fa-2x" aria-hidden="true"></i>
  <input type="file" name="uploadedFile" style="display: none;">
</label>
    
    </div>
<br>
    <input class="btn btn-primary btn-file input_form" type="submit" name="uploadBtn" value="Upload" />
  </form>
  </div>
  </center>
</body>
</html>
