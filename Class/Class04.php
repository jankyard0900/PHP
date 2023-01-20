<?php
class Menu {
  public $name;
  
  // コンストラクタを定義してください
  public function __construct() {
    echo '1つのメニューが作られました';
  }
  
  public function hello() {
    // '私は○○です'とechoしてください
      echo '私は'.$this->name.'です';
    
  }
}

$curry = new Menu();
$pasta = new Menu();
$curry->name = 'CURRY';
$pasta->name = 'PASTA';
$curry->hello();
echo '<br>';
$pasta->hello();

?>