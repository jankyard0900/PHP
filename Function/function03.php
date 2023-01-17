<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Progate</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
  <body>
  
    <?php
  
      // 関数getCircleAreaを定義してください
      function getCircleArea($radius) {
        return $radius * $radius * 3;
      }
      
      // 関数getCircleAreaを呼び出して、戻り値を変数$circleAreaに代入してください
      $circleArea = getCircleArea(5);
      // return 5 * 5 * 3;
      
      // $circleAreaをechoしてください
      echo $circleArea;
      /*
      実行結果
      75
      */ 
      
    ?>
  
  </body>
</html>
