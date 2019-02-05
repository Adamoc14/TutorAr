<?php

    session_start();

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
            array_push($labels, "Font", "Number of pages" ,"Title" ,"Price" ,"Weight" ,"Height" ,"Genre");
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

        div {
            border: 3px solid #29B6F6;
            height: 97vh;
            margin: 1vh 8vw;
            width: 36vw;
            border-radius: 15%;
            position: relative;
            left: 23vw;
        }

        h1 {
            display: flex;
            justify-content: center;
            font-family: monospace;
            text-align: center;
            font-size: 18px;
            position: relative;
            top: 7vh;
        }

        form {
            margin: 8vh 6vw;
            display: flex;
            align-items: self-end;
            flex-direction: column;
        }

        #labels {
            margin-left: 2vw;
            margin-bottom: 2vh;
            position: relative;
            top: -2.5vh;
        }

        input[type="checkbox"] {
            position: relative;
            top: -34vh;
            margin-bottom: 2.5vh;
        }
        
        img {
            width: 20vw;
            margin-left: 6vw;
            position: relative;
            top: 7vh;
            left: 1vw;
        }

        .button{
            position: relative;
            top: -27vh;
            left: 6vw;
            padding: 1vh 3vw;
            border-radius: 20px;
            border: 1px solid #29B6F6;
        }
    
    
    </style>

    
</head>
<body>
    <?php 

        $strArray = array("0","1","2","3","4","5","6");
        $strSelected = "";
        
       echo "<div>";
       echo  "<h1>What Features Will Your $typeLabel Have ?</h1>";
       echo "<img src=\"$img\">";

       echo "<form action = \"inputValues.php\" method=\"post\" id=\"form1\" >";

       foreach ($labels as $label) {
            
             echo  "<label for=\"Checkboxes\" id=\"labels\">$label</label>";

        }

        for($i = 0 ; $i < count($strArray); $i ++){
            $strSelected = $strArray[$i];
            echo "<input type=\"checkbox\" name=\"Checkboxes[]\" value=\"$strSelected\">";
        }

        


        echo "<button type=\"submit\" class=\"button\" >Click Me!</button>";

        echo "</form>";

        echo "</div>";

        $_SESSION['type'] = $type;

        

    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>

    </script>

    

    
</body>
</html>