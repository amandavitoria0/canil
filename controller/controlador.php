<?php
include "./data/animais.php";
$active = [
    "main" => "",
    "cachorros" => "",
    "gatos" => "",
    "peixes" => "",
];

function mainPage(){
    global $items, $active;
    $active = ["main"] = "active";
    $banner = "./images/allanimals.jpg";
    $title = "todos os animais";
    $content = $items;

    include "./include/layout.php";
}

function gatosPage(){
    global $items, $active;
    $active = ["main"] = "active";
    $banner = "./images/banner_cat.jpg";
    $title = "Gatos";
    $content =  array_filter($items, function($animal){
        return $animal['type'] == "gato";
    });

    include "./include/layout.php";
}
function cachorrosPage(){
    global $items, $active;
    $active = ["main"] = "active";
    $banner = "./images/banner_puppy.jpg";
    $title ="cachorro";
    $content =  array_filter($items, function($animal){
        return $animal['type'] == "cachorro";
    });


    include "./include/layout.php";
}

function peixesPage(){
    global $items, $active;
    $active = ["main"] = "active";
    $banner = "./images/banner_fish.jpg";
    $title = "peixe";
    $content = rray_filter($items, function($animal){
        return $animal['type'] == "peixes";
    });


    include "./include/layout.php";
}


?>