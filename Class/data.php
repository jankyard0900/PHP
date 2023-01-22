<?php
// menu.phpを読み込んでください
require_once('menu.php');

// ForeachToHtmlのデータ定義部分をここに移してください
$juice = new Menu('JUICE');
$coffee = new Menu('COFFEE');
$curry = new Menu('CURRY');
$pasta = new Menu('PASTA');
// 配列の中に上記の4つのインスタンスを順に入れて、変数$menusに代入してください
$menus = array($juice, $coffee, $curry, $pasta);
?>