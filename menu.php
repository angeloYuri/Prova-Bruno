  <?php
    if (isset($_GET['lang'])) {
      $lingua = $_GET['lang'];
    }else{
      $lingua = 'pt';
    }
  ?>
 <div class="row menu">
  <nav class="navbar navbar-expand-lg">
    <div class="brand col-xs-4 col-sm-4 col-md-2">
      <a href="<?=$url?>/index.php?lang=<?=$lingua?>"><img src="img/ytlogo.png" alt="Logo"></a>
    </div>
    <div class="input-group col-xs-5 col-sm-6 col-md-8 search">
      <input type="text" class="form-control" placeholder="<?=$lang['pesquisar']?>" aria-label="..." style="background-color: rgb(17,17,17)">
      <div class="input-group-btn">
        <button  class="btn" type="button" name="button" style="background-color: rgb(52,52,52)"><span class="glyphicon glyphicon-search"></span></button>
      </div>
    </div>
    <div class="idioma col-xs-3 col-sm-2 col-md-2">
      <a href=" <?php videoget('pt',$url) ?> ">
      <img src="img/flagbr.png"> </a>
      <a href=" <?php videoget('en',$url) ?> "> <img src="img/flagen.png"> </a>
    </div>
    <?php
      function videoget($ling, $url){
        if ($_SERVER['PHP_SELF'] == '/youtube/video.php') {
          $cat = $_GET['cat'];
          $vid = $_GET['vid'];
          echo $url . '/video.php?cat='.$cat.'&vid='.$vid.'&lang=' . $ling;
        }else{
          echo $url . '/index.php?lang=' . $ling;
        }
      }
     ?>
  </nav>
</div>
