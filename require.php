<?php
  require_once 'conf.php';
  if (isset($_GET['lang'])) {
    if ($_GET['lang'] == 'en') {
      require_once 'en.php';
    }else {
      require_once 'br.php';
    }
  }else {
    require_once 'br.php';
  }
 ?>
