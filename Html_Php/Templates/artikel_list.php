<?php
require $_SERVER['DOCUMENT_ROOT']."/Html_Php/Templates/artikel.php";

$item1 = new Artikel("Parkett Rustikal Eiche matt 18,5x10 cm", 94.18, 74.18, "Dies ist ein guter Artikel", "../../assets/icon1.jpg", "https://dummyimage.com/450x300/dee2e6/6c757d.jpg");
$item2 = new Artikel("Parkett Rustikal Walnuss gebürstet 18,5x10 cm", 81.63, 61.63, "Dies ist ein top Artikel", "../../assets/icon2.jpg", "https://dummyimage.com/450x300/dee2e6/6c757d.jpg");
$item3 = new Artikel("Parkett Rustikal kanadischer Ahorn 18,5x25 cm", 57.06, 37.06, "Dies ist ein guter Artikel", "../../assets/icon3.jpg", "https://dummyimage.com/450x300/dee2e6/6c757d.jpg");
$item4 = new Artikel("Parkett Rustikal Eiche Urban 18,5x25 cm", 66.06, 46.06, "Dies ist ein top Artikel", "../../assets/icon4.jpg", "https://dummyimage.com/450x300/dee2e6/6c757d.jpg");
$item5 = new Artikel("Parkett Rustikal Eiche Naturöl 18,5x25 cm", 65.52, 45.52, "Dies ist ein guter Artikel", "../../assets/icon5.jpg", "https://dummyimage.com/450x300/dee2e6/6c757d.jpg");
$item6 = new Artikel("Parkett Living Eiche Graphit 18,5x25 cm", 47.23, 27.23, "Dies ist ein top Artikel", "../../assets/icon6.jpg", "https://dummyimage.com/450x300/dee2e6/6c757d.jpg");
$item7 = new Artikel("Parkett Natur Eiche matt 18,5x25 cm", 75.80, 55.89, "Dies ist ein guter Artikel", "../../assets/icon7.jpg", "https://dummyimage.com/450x300/dee2e6/6c757d.jpg");
$item8 = new Artikel("Parkett Rustikal Eiche lackiert 18,5x25 cm", 81.63, 61.63, "Dies ist ein top Artikel", "../../assets/icon8.jpg", "https://dummyimage.com/450x300/dee2e6/6c757d.jpg");

$items = array($item1, $item2, $item3, $item4, $item5, $item6, $item7, $item8);

usort($items, fn($a, $b) => strcmp($a->name, $b->name));

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
                     <div class=\"text-center\"><a class=\"btn btn-outline-dark mt-auto\" onclick=\"addArtikel()\">Details</a></div>
                 </div>
             </div>
         </div>";
}
?>