<?php
// ForeachToHtmlのクラスの定義部分をここに移動した
class Menu {
  public $name;
  
  public function __construct($name) {
    $this->name = $name;
  }
  
  public function hello() {
    echo '私は'.$this->name.'です';
  }
}
?>