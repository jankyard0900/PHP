<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Progate</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
  <body>
  
    <?php
  
      // この下にfor文を書いてください
      for ($i = 1; $i <= 1000; $i ++) {
        if ($i % 3 == 0) {
          // 3で割り切れる数はスキップされる
          continue;
        }
        echo $i;
        echo '<br>';
      }
      
    ?>
  
  </body>
</html>