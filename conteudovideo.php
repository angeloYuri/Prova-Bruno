<?php
  require_once 'require.php';
  $cat = $_GET['cat'];
  $vid = $_GET['vid'];
 ?>

<div class="col-xs-12 col-sm-12 col-md-9">
  <div class="row">
    <iframe width="854" height="480" src="<?=$links[$cat][$vid]?>" frameborder="0" gesture="media" allowfullscreen></iframe>
    <hr>
    <h3 style="color:white"><?=$lang[$cat][$vid]?></h3>
    <hr>
  </div>

  <div class="desc row">
    <h3 style="color:white"><?=$lang['descri']?></h3>
    <button type="button" id="showD" class="btn btn-danger"><?=$lang['mostrarD']?></button>

    <div class="descricao col-xs-12">
      <div class="col-xs-12 col-sm-9"><span style="color:gray"><?=$lang['descricao']?></span></div>
      <div class="col-xs-12 col-sm-3">
        <br><center><button type="button" class="btn btn-danger" id="showComm"><?=$lang['mostrarC']?></button></center>
      </div>
    </div>
    &nbsp;<hr>
  </div>

    <?php
    echo '<div class="comment-div row">
            <h3 style="color:white">'.$lang['comentarios']['comm'].'</h3></br>';
    $r = rand(3,10);
    for ($i=0; $i <= $r; $i++) {
      $rName = rand(0,15);
      $rComm = rand(0,8);
      echo '<div class="col-xs-12">
             <i class="fa fa-user-circle-o fa-3x" aria-hidden="true" style="color:white"></i>
             <span style="color:white">'.$lang['comentarios']['nomes'][$rName].'</span><br><br>
             <span style="color:gray">'.$lang['comentarios']['comments'][$rComm].'</span>
             <hr>
           </div>';
    }
    echo '</div>';
     ?>
</div>
<div class="col-xs-12 col-sm-12 col-md-3">

  <?php
  echo '<div class="row relac">
          <center><button type="button" id="showR" class="btn btn-danger">'.$lang['cat']['mostrar'].'</button></center>
          <div class="showRelated">
            <center><b style="color:white">'.$lang['cat']['rel'].'</b></center>';
  for($i = 0; $i < 9; $i++){
    if ($vid != $i) {
      echo '<div class="col-xs-12 relvid">
              <a href="' . $url . '/video.php?cat='.$cat.'&vid='.$i.'&lang='.$_GET['lang'].'"><img src="'. $imgs[$cat][$i] .'">
              <b><h5>'. $lang[$cat][$i] .'</h5></b></a>
            </div>';
    }
  }
  echo '  </div>
        </div>';
   ?>

</div>
