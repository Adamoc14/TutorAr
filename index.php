<?php

if ($_GET["type"] == "dog") {
    $img = 'Images/Dog.jpg';
    $type = 'Dog';
    $labels = ["Main Colour", "Has Collar", "Name", "Age", "Type", "Weight", "Height"];

} else if ($_GET["type"] == "book") {
    $img = 'Images/book.jpg';
    $type = 'Book';
    $labels = ["Colour Language", "Font", "Number of pages" ,"Title" ,"Price" ,"Weight" ,"Height" ,"Genre"];

} else if ($_GET["type"]== "house") {
    $img = 'Images/house.jpg';
    $type = 'House';
    $labels = ["Colour","Door Colour","Number of windows","Type of windows","Number of Storeys","Number of rooms ","Southfacing / Northfacing "];
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        input{
            width:100vw;
        }
    
    </style>
</head>
<body>
    <h1>What Features Will Your Dog Have ?</h1>
    <?php 

        "<h1>What Features Will Your $type Have ?</h1>";

        foreach ($labels as $label) {
            "<input type=\"checkbox\" name=\"\" id=\"\"><label>$label</label>";
        }

        "<img src=\"$img\" alt=\"\">";
    ?>

    
</body>
</html>