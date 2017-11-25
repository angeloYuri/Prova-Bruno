<!DOCTYPE html>
<html>
  <head>
    <?php require_once 'scripts.php'; ?>
  </head>
  <body>
    <?php $teste = $_GET['lang']; ?>
    <span class="inp" style="display:none"><?=$teste?></span>
    <?php
      require_once 'require.php';
     ?>
  	<div class="container-fluid">
      <?php require_once 'menu.php'; ?>

      <div class="row">
        <div class="lateral sidebar">
          <?php require_once 'lateral.php'; ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 cont">
          <div class="conteudo">
            <div style="height:150px"></div>
            <center><span style="color:white;font-size:40px"><b><?=$lang['welcome']?></b></span>
            <img src="img/ytlogo.png" class="img-responsive" style="width:500px"> </center>
          </div>
        </div>
      </div>

  	</div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/javas.js"></script>
  </body>
</html>
