<?php
// ForeachToHtmlのクラスの定義部分をここに移動した
class Menu {
  // name, price, imageプロパティのアクセス権をprivateにしてください
  private $name;
  // $priceというプロパティを定義してください
  private $price;
  // $imageというプロパティを定義してください
  private $image;
  // $orderCountというプロパティを定義してください
  private $orderCount = 0;
  
  // コンストラクタの引数に$price, $imageを追加してください
  public function __construct($name, $price, $image) {
    $this->name = $name;
    // priceプロパティに引数の$priceを代入してください
    $this->price = $price;
    // imageプロパティに引数の$imageを代入してください
    $this->image = $image;
  }
  
  // getNameメソッドを定義してください
  public function getName() {
    return $this->name;
  }

  // getImageメソッドを定義してください
  public function getImage() {
    return $this->image;
  }
  
  // getOrderCountメソッドを定義してください
  public function getOrderCount() {
    return $this->orderCount;
  }

  // setOrderCountメソッドを定義してください
  public function setOrderCount($orderCount) {
    $this->orderCount = $orderCount;
  }

  public function getTaxIncludedPrice() {
    return floor($this->price * 1.08);
  }
  
  // getTotalPriceメソッドを定義してください
  public function getTotalPrice() {
    return $this->getTaxIncludedPrice() * $this->OrderCount;
  }

}
?>