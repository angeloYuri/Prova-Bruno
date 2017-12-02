<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>YouTube -
      <?php
        require_once 'require.php';
        $cat = $_GET['cat'];
        $vid = $_GET['vid'];
        echo $lang[$cat][$vid];
      ?>
    </title>
    <link rel="shortcut icon" href="img/ytLogoTitle.ico" >
    <link rel="stylesheet" href="css/fontAwesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php require_once 'require.php'; ?>
  	<div class="container-fluid">

      <?php require_once 'menu.php'; ?>

      <div class="container">
        <div class="row videocont">
          <?php require_once 'conteudovideo.php'; ?>
        </div>
      </div>

  	</div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/javas.js"></script>
  </body>
</html>
