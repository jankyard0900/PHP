<?php
// ここでdata.phpを読み込んでください
require_once('data.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Café Progate</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="menu-wrapper container">
    <h1 class="logo">Café Progate</h1>
    <div class="menu-items">
      <!-- 配列$menusの要素を変数$menuとするforeach文を書いてください -->
      <?php foreach ($menus as $menu): ?>
        <div class="menu-item">
          <!-- <img>タグのsrc属性に、$menuのimageプロパティを表示してください -->
          <img src="<?php echo $menu->getImage(); ?>">
          <h3 class="menu-item-name"><?php echo $menu->getName(); ?></h3>
          <!-- <p>タグの中に、$menuのpriceプロパティを表示してください -->
          <p class="price">¥<?php echo $menu->getTaxIncludedPrice(); ?></p>
          <!-- $menuのゲッターを用いてorderCountプロパティを表示してください -->
          <p>注文数: <?php echo $menu->getOrderCount(); ?></p>
        </div>
      <?php endforeach ?>
    </div>
  </div>
</body>
</html>
