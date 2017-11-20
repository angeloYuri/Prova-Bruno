<?php
  require_once 'conf.php';
  if (isset($_GET['lang']) == 'en') {
    require_once 'en.php';
  }else {
    require_once 'br.php';
  }
  $cat = $_GET['cat'];
  $vid = $_GET['vid'];
 ?>
<div class="col-xs-12 col-sm-9 col-md-10">
  <iframe width="854" height="480" src="<?=$links[$cat][$vid]?>" frameborder="0" gesture="media" allowfullscreen></iframe>
  <h2 style="color:white"><?=$lang[$cat][$vid]?></h2>
</div>
<div class="col-xs-12 col-sm-3 col-md-2">
  <?php
  echo '<div class="row">';
  echo '<b style="color:white">Vídeos Relacionados</b>';
  for($i = 0; $i < 9; $i++){
    if ($vid != $i) {
      echo '<div class="col-xs-12">';
      echo '<a href="' . $url . '/video.php?cat='.$cat.'&vid='.$i.'"><img src="'. $imgs[$cat][$i] .'">';
      echo '<b><h5>'. $lang[$cat][$i] .'</h5></b></a>';
      echo '</div>';
    }
  }
  echo '</div>';
   ?>
</div>
