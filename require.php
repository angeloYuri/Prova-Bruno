<?php
  require_once 'conf.php';
  if ($_GET['lang'] == 'en') {
    require_once 'en.php';
  }else {
    require_once 'br.php';
  }
 ?>
