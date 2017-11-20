<?php
  $cat = $_GET['cat'];
  require_once 'conf.php';
  if ($_GET['lang'] == 'en') {
    require_once 'en.php';
    $teste = ucfirst($lang['cat'][$cat]);
  }else {
    require_once 'br.php';
    $teste = ucfirst($cat);
  }

  echo '<div class="row">';
  echo '<h1 style="color:white">&ensp;'.$teste.'</h1>';
  echo '<hr style="border-top: 1px solid rgb(46,46,46)">';
  for($i = 0; $i < 9; $i++){
    echo '<div class="col-xs-12 col-sm-6 col-md-4 link">';
    echo '<a href="' . $url . '/video.php?cat='.$cat.'&vid='.$i.'&lang='.$_GET['lang'].'"><img src="'. $imgs[$cat][$i] .'">';
    echo '<b><h5>'. $lang[$cat][$i] .'</h5></b></a>';
    echo '</div>';
  }
  echo '</div>';
 ?>
