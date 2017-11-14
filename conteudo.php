<?php
  require_once 'conf.php';
  if ($_GET['cat'] == 'musica') {
    //echo "musica";
  }elseif ($_GET['cat'] == 'jogos') {
    //echo "jogos";
  }


  echo '<div class="row">';
  for($i = 0; $i < 10; $i++){
    echo '<div class="col-xs-4">';
    echo '<a href="' . $url . '/video.php"><h2>teste</h2></a>';
    echo '</div>';
  }
  echo '</div>';
 ?>
