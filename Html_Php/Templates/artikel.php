<?php
class Artikel {
    public $name;
    public $price;
    public $salePrice;
    public $description;
    public $icon;
    public $pic;

    public function __construct($name, $price, $salePrice, $description, $icon, $pic) {
        $this->name = $name;
        $this->price = $price;
        $this->salePrice = $salePrice;
        $this->description = $description;
        $this->icon = $icon;
        $this->pic = $pic;
    }
}
?>
