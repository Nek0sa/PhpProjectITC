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
        $this->alePrice = $salePrice;
        $this->escription = $description;
        $this->icon = $icon;
        $this->pic = $pic;
    }

}

$item1 = new Artikel("Artikel1", 100, 10, "Dies ist ein guter Artikel", "https://dummyimage.com/450x300/dee2e6/6c757d.jpg", "https://dummyimage.com/450x300/dee2e6/6c757d.jpg");
$item2 = new Artikel("Artikel2", 500, "15", "Dies ist ein top Artikel", "https://dummyimage.com/450x300/dee2e6/6c757d.jpg", "https://dummyimage.com/450x300/dee2e6/6c757d.jpg");

$items = array($item1, $item2);

foreach ($items as $item) {
    echo "<div class=\"col mb-5\">
             <div class=\"card h-100\">
             <!-- Sale badge-->
                 <div class=\"badge bg-dark text-white position-absolute\" style=\"top: 0.5rem; right: 0.5rem\">Sale</div>
                 <!-- Product image-->
                 <img class=\"card-img-top\" src=\"$item->icon\" alt=\"...\" />
                 <!-- Product details-->
                 <div class=\"card-body p-4\">
                     <div class=\"text-center\">
                         <!-- Product name-->
                         <h5 class=\"fw-bolder\">$item->name</h5>
                         <!-- Product price-->
                         <span class=\"text-muted text-decoration-line-through\">€$item->price</span>
                         €$item->salePrice
                     </div>
                 </div>
                 <!-- Product actions-->
                 <div class=\"card-footer p-4 pt-0 border-top-0 bg-transparent\">
                     <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" href=\"#\">Details</a></div>
                 </div>
             </div>
         </div>";
}
?>