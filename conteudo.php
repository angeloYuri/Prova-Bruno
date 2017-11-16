<?php
  require_once 'require.php';
  $cat = $_GET['cat'];


  echo '<div class="row">';
  for($i = 0; $i < 9; $i++){
    echo '<div class="col-xs-12 col-sm-6 col-md-4 link">';
    echo '<a href="' . $url . '/video.php"><img src="'. $imgs[$cat][$i] .'" alt="gordo">';
    echo '<b><h5>'. $lang[$cat][$i] .'</h5></b></a>';
    echo '</div>';
  }
  echo '</div>';
 ?>
