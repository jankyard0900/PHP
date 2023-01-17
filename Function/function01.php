<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Progate</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
  </head>
  <body>
  
    <?php
  
      $str = 'progate';
  
      // strlenを用いて$strの長さをechoしてください
      echo strlen($str);
      /*
      実行結果
      7
      */
      
      echo '<br>';
      
      $array = array('HTML', 'CSS', 'PHP');
  
      // countを用いて$arrayの要素数をechoしてください
      echo count($array);
      /*
      実行結果
      3
      */

      
      echo '<br>';
      
      // randを用いて10から15までのランダムな数字をechoしてください
      echo rand(10, 15);
      /*
      実行結果
      12 (※その時次第で変わる)
      */ 
      
    ?>
  
  </body>
</html>