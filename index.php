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
            array_push($labels, "Name", "Age", "Type", "Weight", "Height");
            // echo $img , $typeLabel;
            // foreach($labels as $label){
            //     print_r($label);
            // }
        } else if ($type == "fish") {
            $img = 'Images/fish.jpg';
            $typeLabel = 'Fish';
            array_push($labels, "Name" ,"Age" ,"Colour" ,"Weight" ,"Height");
            // echo $img , $typeLabel;
            // foreach($labels as $label){
            //     print_r($label);
            // }
        } else if ($type == "cat") {
            $img = 'Images/cat.jpg';
            $typeLabel = 'Cat';
            array_push($labels , "Name","Age","Colour","Weight","Height");
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

        @media screen and (min-width:20em) {  /*320px*/
            div {

                margin: 1vh -17vw;
                width: 82vw;
            }
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

        @media screen and (min-width:20em) {  /*320px*/
            form {
                margin: 0vh 17vw;
            }

        }

        @media screen and (min-width:87em){  /*1920px*/
            form{
                align-items : center;
            }
        }

        #labels {
            margin-left: 2vw;
            margin-bottom: 2vh;
            position: relative;
            top: -2.5vh;
        }
        
        @media screen and (min-width:20em) {  /*320px*/
            #labels {
                margin-left: 10vw;
                top:2.5vh;
                width: 60vw;
            }
        }

        @media screen and (min-width:87em){  /*1920px*/
            #labels {
                margin-left: 0vw;
                left: -5vw;
                
            }
        }

        



        input[type="checkbox"] {
            position: relative;
            top: -34vh;
            margin-bottom: 2.5vh;
        }

        @media screen and (min-width:20em) {  /*320px*/
            input[type="checkbox"] {
                top: -22vh;
            }
        }

        @media screen and (min-width:87em){  /*1920px*/
            input[type="checkbox"] {
                top: -34.5vh;
                left: -10vw;
            }
        }
        
        img {
            width: 20vw;
            margin-left: 6vw;
            position: relative;
            top: 7vh;
            left: 1vw;
        }

        @media screen and (min-width:20em) {  /*320px*/
            img {
                width: 35vw;
                margin: 5vh 19vw;
                top: 4vh
            }
        }



        .button{
            position: relative;
            top: -27vh;
            left: 6vw;
            padding: 1vh 3vw;
            border-radius: 20px;
            background:white;
            border: 1px solid #29B6F6;
        }

        @media screen and (min-width:20em) {  /*320px*/
            .button{
                top: -20vh;
                padding: 1vh 11vw;
            }
        }

        @media screen and (min-width:87em){  /*1920px*/
            .button{
                top: -34vh;
                left: 0vw;
            }
        }
    
    
    </style>

    
</head>
<body>
    <?php 

        $strArray = array("0","1","2","3","4");
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