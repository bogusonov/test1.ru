<?php
  include("include/db_connect.php");
  include("functions/functions.php");
?>
<html>
  <head>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <title>Тестовое задание</title>
  </head>
  <body>
    <div id="block-body">
    <?php
        include("include/block-header.php");
    ?>
    </div>
    <div id="block-content">
      <ul id="block-good-grid" style="list-style-type: none;">
        <?php
          $result = mysql_query("SELECT * FROM persons",$link);

          if(mysql_num_rows($result) > 0)
          {
              $row = mysql_fetch_array($result);
              do
              {
                  /*Подгон размера картинки и проверка на существование пути*/
                  if($row["image"] != "" && file_exists("./images/".$row["image"]))
                  {
                      $img_path = "./images/".$row["image"];
                      $max_width = 100;
                      $max_height = 100;
                      list($width, $height) = getimagesize($img_path);
                      $ration = $max_height / $height;
                      $ratiow = $max_width / $width;
                      $ratio = min($ration, $ratiow);
                      $width = intval($ratio*$width);
                      $height = intval($ration*$height);
                  }
                  else
                  {
                      $img_path = "/images/no-image.png";
                      $width = 110;
                      $height = 200;
                  }
                  echo '
                  <form method="get" class="form_add" action="/include/handler_del.php">
                      <li class="block-good-grid-li">
                          <div class="block-images-grid"><img src="'.$img_path.'" width="'.$width.'" height="'.$height.'"/></div>
                          <p class="style-title-grid"><a href="">'.$row["title"].'</a></p>
                          <p class="add-cart-style-grid" tid="'.$row["id"].'" name="'.$row["id"].'">
                          <div class="mini-features">
                              <p>Телефон:"'.$row["phone"].'"</p>
                              <p>Должность:"'.$row["job"].'"</p>
                              <p>Возраст:"'.$row["years"].'"</p>
                          </div>
                          <p class="style-title-grid"><a href="/include/handler_del.php?id='.$row["id"].'">Удалить</a></p>
                      </li>
                    </form>
                  ';
              }
              while($row = mysql_fetch_array($result));
          }
        ?>
      </ul>
    </div>
  </body>
</html>
