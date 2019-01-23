<?php

    $type = ''; 
    $img = '';
    $typeLabel = '';
    $labels = array();


    function strip_bad_chars($input) {
        $output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
        return $output;
    }

    if(isset($_GET['type'])) {
        $type = strip_bad_chars($_GET['type']);
        // echo $type;
        if ($type == "dog") {
            $img = 'Images/Dog.jpg';
            $typeLabel = 'Dog';
            array_push($labels, "Main Colour", "Has Collar", "Name", "Age", "Type", "Weight", "Height");
            // echo $img , $typeLabel;
            // foreach($labels as $label){
            //     print_r($label);
            // }
        } else if ($type == "book") {
            $img = 'Images/book.jpg';
            $typeLabel = 'Book';
            array_push($labels, "Colour Language", "Font", "Number of pages" ,"Title" ,"Price" ,"Weight" ,"Height" ,"Genre");
            // echo $img , $typeLabel;
            // foreach($labels as $label){
            //     print_r($label);
            // }
        } else if ($type == "house") {
            $img = 'Images/house.jpg';
            $typeLabel = 'House';
            array_push($labels , "Colour","Door Colour","Number of windows","Type of windows","Number of Storeys","Number of rooms ","Southfacing / Northfacing ");
            // echo $img , $typeLabel;
            // foreach($labels as $label){
            //     print_r($label);
            // }

            /*Using these above statements i ouputted all my variables to see what was going on behind the page and I found multiple errors first being undefined index for get variable
            sorted this by using isset() method then it was telling me my variables weren't noticed so I declared them and then I tried to output all my variables once I 
            wanted to test whether they were working or not and first two are strings so you can echo as is but for array use foreach() to loop through array and output result*/
        } 
    } else {
        $type = ''; 
        $img = '';
        $typeLabel = '';
        $labels = [];
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


        h1 {
            display: flex;
            justify-content: center;
            font-family: monospace;
        }

        main{
            margin: 5vh 1vw;
        }

        label{
            margin-left: 1vw;
        }
        
        img {
            width: 20vw;
            margin: -49vh auto;
            display : flex;
        }
    
    </style>
</head>
<body>
    <?php 

       echo  "<h1>What Features Will Your $typeLabel Have ?</h1>";

        foreach ($labels as $label) {
           echo  "<main><input type=\"checkbox\"><label>$label</label></main>";
        }

        echo "<img src=\"$img\">";
    ?>

    
</body>
</html>