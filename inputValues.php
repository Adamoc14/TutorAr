<?php

session_start();

$labels = array();
$labelsCount = 0;


if ($_SESSION['type']== "dog") {
    array_push($labels, "Main Colour", "Has Collar", "Name", "Age", "Type", "Weight", "Height");
} else if($_SESSION['type']== "book"){
    array_push($labels, "Font", "Number of pages" ,"Title" ,"Price" ,"Weight" ,"Height" ,"Genre");
} else if($_SESSION['type'] == "house") {
    array_push($labels , "Colour","Door Colour","Number of windows","Type of windows","Number of Storeys","Number of rooms ","Southfacing / Northfacing ");
} else {
    $labels = [];
}

$labelsCount = count($labels) - 1;


if(!empty($_POST["Checkboxes"])){
    foreach($_POST["Checkboxes"] as $checkbox) {
        for ($i=0; $i < 1; $i++) { 
            echo "<label>$labels[$checkbox]</label><input type=\"text\" >&nbsp;";
        }
    }
    
} else {
    echo "You didn't pick any properties";
}



/*This is how to check which checkboxes have been clicked , give everyone of the checkboxes
a name like "Checkboxes[]" and then you can refer to them in the page you posted them too by using the !empty function
and checking whether the "$_POST["Checkboxes"]" is indeed empty and if not run a loop on them and output them one by one 
Note : each checkbox must have a different value set */
 











?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
 </head>
 <body>
     
    <?php include("explanation.php"); ?>

    <?php 
        
    ?>

 </body>
 </html>