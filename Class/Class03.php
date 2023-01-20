<?php
class Menu {
  // helloメソッドを定義してください
  public function hello() {
    echo "私はMenuクラスのインスタンスです";
  }
  
}

$curry = new Menu();
$pasta = new Menu();

// $curryに対してhelloメソッドを呼び出してください
$curry->hello();

echo '<br>';
// $pastaに対してhelloメソッドを呼び出してください
$pasta->hello();

?>