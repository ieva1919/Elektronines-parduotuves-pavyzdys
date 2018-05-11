<?php

session_start();

if (isset($_GET['product'])) { //jeigu nustatytas gaminys, tai tada vykdomas sitas kodas

    $product = $_GET['product']; 

    if (!isset($_SESSION['cart'])) {  //jeigu nera kintamojo krepselio tai sukuriamas tuscias sarasas
        $_SESSION['cart'] = array();
    }

    $count = isset($_SESSION['cart'][$product]) ? $_SESSION['cart'][$product] : 0;  //patikrina ar yra gaminys krepsely, paima kieki, jeigu nera, tai tada 0
    if (isset($_GET['count'])) {                
        $count = $count + $_GET['count'];
    }
    if (isset($_GET['set'])) {
        $count = $_GET['set'];
    }

    if ($count == 0) {
        unset($_SESSION['cart'][$product]);     //jeiku kiekis 0, tai gamini istrina
    } else {
        $_SESSION['cart'][$product] = $count;       //o jeigu ne 0 kiekis, tai nustato nurodyta kieki
    }
}

print_r($_SESSION);


?>