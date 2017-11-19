<!DOCTYPE html>
<html>
  <head>
    <?php require_once 'scripts.php'; ?>
  </head>
  <body>
    <?php
      require_once 'conf.php';
      if (isset ($_GET['lang']) == 'en') {
        require_once 'en.php';
      }else {
        require_once 'br.php';
      }
     ?>
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
