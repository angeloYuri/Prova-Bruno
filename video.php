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
  	</div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/javas.js"></script>
  </body>
</html>
