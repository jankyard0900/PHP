<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Progate</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
  <body>
  
    <?php
  
      // 変数$iを定義してください
      $i = 2;
      
      // while文を書いてください
      // $iが100以下の時
      while ($i <= 100) {
        // 2の倍数の時$iを出力する
        if ($i % 2 == 0) {
          echo $i;
          echo '<br>';
        }
        // 1を追加する
        $i++;
      }
      
    ?>
  
  </body>
</html>