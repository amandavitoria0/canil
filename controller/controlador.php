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

function calopsitaPage(){
    global $items, $active;
    $active = ["main"] = "active";
    $banner = "./images/banner_fish.jpg";
    $title = "calopsita";
    $content = rray_filter($items, function($animal){
        return $animal['type'] == "calopsita";
    });


    include "./include/layout.php";
}

function papagaioPage(){
    global $items, $active;
    $active = ["main"] = "active";
    $banner = "./images/banner_fish.jpg";
    $title = "papagaio";
    $content = rray_filter($items, function($animal){
        return $animal['type'] == "papagaio";
    });


    include "./include/layout.php";
}

function canarioPage(){
    global $items, $active;
    $active = ["main"] = "active";
    $banner = "./images/banner_fish.jpg";
    $title = "canario";
    $content = rray_filter($items, function($animal){
        return $animal['type'] == "canario";
    });


    include "./include/layout.php";
}

function raposaPage(){
    global $items, $active;
    $active = ["main"] = "active";
    $banner = "./images/banner_fish.jpg";
    $title = "raposa";
    $content = rray_filter($items, function($animal){
        return $animal['type'] == "raposa";
    });


    include "./include/layout.php";
}

function coelhoPage(){
    global $items, $active;
    $active = ["main"] = "active";
    $banner = "./images/banner_fish.jpg";
    $title = "coelho";
    $content = rray_filter($items, function($animal){
        return $animal['type'] == "coelho";
    });


    include "./include/layout.php";
}

function ratoPage(){
    global $items, $active;
    $active = ["main"] = "active";
    $banner = "./images/banner_fish.jpg";
    $title = "rato";
    $content = rray_filter($items, function($animal){
        return $animal['type'] == "rato";
    });


    include "./include/layout.php";
}

function passarosPage(){
    global $items, $active;
    $active = ["main"] = "active";
    $banner = "./images/banner_fish.jpg";
    $title = "passaros";
    $content = rray_filter($items, function($animal){
        return $animal['type'] == "passaros";
    });


    include "./include/layout.php";
}


?>