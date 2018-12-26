<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/grahasegara.jpg" type="image/jpg" />
    <title>GRAHA SEGARA</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
	  <br><br><h1><font face="Century Gothic"><p align="center"><img src="img/grahasegara.jpg" height="70" width="70">
	  <b> SISTEM INFORMASI<BR>JADWAL PERAWATAN</b></p></font></h1><br><br>
  </head>
  <body>
    <div class="col-md-4 col-md-offset-4 form-login">
	  
    <?php
    /* handle error */
    if (isset($_GET['error'])) : ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
        </div>
    <?php endif;?>

    <br>

        <div class="outter-form-login">
        <div class="logo-login">
        </div>
            <form action="check-login.php" class="inner-login" method="post">
            <h3 class="text-center title-login">Please Login</h3><br>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                
                <input type="submit" class="btn btn-block btn-custom-green" value="LOGIN" />
                
            </form>
        </div><br><br><br><br>
		<div id="footer"><p align="center"><b>Copyright &copy; 2018 - AF Project</b></p></div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

  </body>
</html>