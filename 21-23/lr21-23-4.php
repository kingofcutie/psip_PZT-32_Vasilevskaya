<?php
    $products = array("Хлеб"=>5000, "Молоко"=>800, "Сметана"=>7000);
    print $products["Молоко"];
    echo "<br>";
    arsort($products);
    print_r($products);
?>
