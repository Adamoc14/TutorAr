<?php
session_start();

$labels = array();
$labelsCount = 0;

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>

     <style>

        h2 {
            text-align: center;
            font-size: 21px;
            font-family: fantasy;
        }

        form#form1 {
            display: flex;
            flex-direction: column;
            width: 12vw;
            margin: 0 20vw;
        }

        img.img {
            position: relative;
            top: -55vh;
            left: 37vw;
            width: 30vw;
            border-radius: 20px;
        }

        button#btn {
            position: relative;
            top: 6vh;
            left: 20vw;
        }



     </style>
 </head>
 <body>
     
    <?php include("explanation.php"); ?>


    <h2>Now that you've set out the properties your <?php echo  $_SESSION['type'] ?>  should have, <br> lets give these properties values to make your  <?php echo  $_SESSION['type'] ?> become a reality!</h1>

    <?php

        if ($_SESSION['type']== "dog") {
            array_push($labels, "Main Colour", "Has Collar", "Name", "Age", "Type", "Weight", "Height");
        } else if($_SESSION['type']== "book"){
            array_push($labels, "Font", "Number of pages" ,"Title" ,"Price" ,"Weight" ,"Author" ,"Genre");
        } else if($_SESSION['type'] == "house") {
            array_push($labels , "Colour","Door Colour","Number of windows","Type of windows","Number of Storeys","Number of rooms ","Southfacing / Northfacing ");
        } else {
            $labels = [];
        }

        $labelsCount = count($labels) - 1;

        echo "<form action = \"JSONFormatter.php\" method=\"get\" id=\"form1\" >";

        if(!empty($_POST["Checkboxes"])){
            foreach($_POST["Checkboxes"] as $checkbox) {
                for ($i=0; $i < 1; $i++) {                     
                    echo "<label>$labels[$checkbox]:</label>&nbsp;&nbsp;";
                    if ($_SESSION['type']== "dog") {
            
                        if(strpos($labels[$checkbox], "Main Colour")!== false){
                            echo "<select name=\"main-colour\"><option>Red</option><option>Black</option><option>Brown</option></select><br>";
                        } else if (strpos($labels[$checkbox], "Has Collar")!== false){
                            echo "Yes<input type= \"radio\" value= \"Yes\" name=\"has-collar\">&nbsp;&nbsp;No<input type= \"radio\" value= \"No\" name=\"has-collar\"><br>";
                        } else if (strpos($labels[$checkbox], "Name")!== false){
                            echo "<input type= \"text\" name=\"dog-name\"><br>";
                        } else if (strpos($labels[$checkbox], "Age")!== false) {
                            echo "<input type= \"text\" name=\"dog-age\"><br>";
                        } else if (strpos($labels[$checkbox], "Type")!== false){
                            echo "<select name=\"dog-type\"><option>Jack Russell</option><option>Dalmation</option><option>Labrador</option></select><br>";
                        } else if (strpos($labels[$checkbox], "Weight")!== false){
                            echo "<input type= \"text\" name=\"dog-weight\"><br>";
                        } elseif (strpos($labels[$checkbox], "Height")!== false) {
                            echo "<input type= \"text\" name=\"dog-height\"><br>";
                        } else{
                            echo ""; 
                        }
                    } else if($_SESSION['type']== "book"){
                        if(strpos($labels[$checkbox], "Font")!== false){
                            echo "<select><option>Times New Roman</option><option>Georgia</option><option>Fantasy</option></select><br>";
                        } else if (strpos($labels[$checkbox], "Number of pages")!== false){
                            echo "<input type= \"text\"><br>";
                        } else if (strpos($labels[$checkbox], "Title")!== false){
                            echo "<input type= \"text\"><br>";
                        } else if (strpos($labels[$checkbox], "Price")!== false) {
                            echo "<input type= \"text\"><br>";
                        } else if (strpos($labels[$checkbox], "Weight")!== false){
                            echo "<input type= \"text\"><br>";
                        } else if (strpos($labels[$checkbox], "Author")!== false){
                            echo "<input type= \"text\"><br>";
                        } elseif (strpos($labels[$checkbox], "Genre")!== false) {
                            echo "<select><option>Horror</option><option>Action</option><option>Romance</option></select><br>";
                        } else{
                            echo ""; 
                        }
                        
                    } else if($_SESSION['type'] == "house") {
                        if(strpos($labels[$checkbox], "Colour")!== false){
                            echo "<select><option>Red</option><option>Black</option><option>Brown</option></select><br>";
                        } else if (strpos($labels[$checkbox], "Door Colour")!== false){
                            echo "<select><option>Red</option><option>Black</option><option>Brown</option></select><br>";
                        } else if (strpos($labels[$checkbox], "Number of windows")!== false){
                            echo "<input type= \"text\"><br>";
                        } else if (strpos($labels[$checkbox], "Type of windows")!== false) {
                            echo "<select><option>Double Glazed</option><option>Single Glazed</option><option>Triple Glazed</option></select><br>";
                        } else if (strpos($labels[$checkbox], "Number of Storeys")!== false){
                            echo "<input type= \"text\"><br>";
                        } else if (strpos($labels[$checkbox], "Number of rooms")!== false){
                            echo "<input type= \"text\"><br>";
                        } elseif (strpos($labels[$checkbox], "Southfacing / Northfacing")!== false) {
                            echo "S<input type= \"radio\" value= \"Southfacing\">&nbsp;&nbsp;N<input type= \"radio\" value= \"Northfacing\"><br>";
                        } else{
                            echo ""; 
                        }
                    } else {
                        
                    }
                }
            }
            
        } else {
            echo "You didn't pick any properties";
        }


        echo "<button type=\"submit\" id=\"btn\">Submit</button>";
       

        echo "</form>";

        echo "<img src=\"Images/3DPrinting.gif\" class=\"img\">"

        /*This is how to check which checkboxes have been clicked , give everyone of the checkboxes
        a name like "Checkboxes[]" and then you can refer to them in the page you posted them too by using the !empty function
        and checking whether the "$_POST["Checkboxes"]" is indeed empty and if not run a loop on them and output them one by one 
        Note : each checkbox must have a different value set */


        



    ?>

    <main id= "results"></main>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>

//this is one way of changing the data from the form into objects and sending them as json except i don't know how to send the 
// json formatted result so we're going to try above method using all php and sending all the data to a json file 


//I'm transferring the form data into an url call and posting it to other JSONformatter.php page so that I can 
//access it and pull it back into the app  
    $.fn.serializeObject = function() {
        var object = {};
        var arrayOfObjects = this.serializeArray();
        $.each(arrayOfObjects, function(){
            console.log(object[this.name]);
            //We just console.logged above and found that everything was undefined this was because there 
            // was indeed nothing in the object at this time so what we're saying is when the object is undefined push the this.name into the object 
            // so it looks something like this {name : Adam}
            if(object[this.name]!== undefined){
                if (!object[this.name].push) {
                    object[this.name] = [object[this.name]];
                }
                object[this.name].push(this.value || '');  
            } else {
                object[this.name] = this.value || '';
            }
        });
        
        return object;
        
    };

    $('form').submit(function(event){
        var result = $('form').serializeObject();
        //This basically just makes an object out of each of the form inputs
        var jsonResult = JSON.stringify(result);
        console.log(jsonResult);
        $.get('JSONFormatter.php', {data: jsonResult} , function(response){
            $('#results').html(jsonResult);
        });

        event.preventDefault();

    });


</script>

 </body>
 </html>