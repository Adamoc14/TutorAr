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

        @media screen and (min-width:20em) {  /*320px*/
            h2{
                font-size: 16px;
            }
        }

        form#form1 {
            display: flex;
            flex-direction: column;
            width: 12vw;
            margin: 0 20vw;
        }

        @media screen and (min-width:20em) {  /*320px*/
            form#form1 {
                width: 50vw;
                margin: 0 8vw;
            }

        }

        @media screen and (min-width:20em) { /*320px*/
            label{
                font-size: 13px;
            }
        }

        img.img {
            position: relative;
            top: -55vh;
            left: 37vw;
            width: 30vw;
            border-radius: 20px;
        }

        @media screen and (min-width:20em) {  /*320px*/
            img.img {
                top: -105vh;
                left: 32vw;
                width: 60vw;
            }


        }

        button#btn {
            position: relative;
            top: 6vh;
            left: 20vw;
        }

        @media screen and (min-width:20em) {  /*320px*/
            button#btn {
                left: 15vw;
            }
        }





     </style>
 </head>
 <body>
     
    <?php include_once("explanation.php"); ?>


    <h2>Now that you've set out the properties your <?php echo  $_SESSION['type'] ?>  should have, <br> lets give these properties values to make your  <?php echo  $_SESSION['type'] ?> become a reality!</h1>

    <?php

        

        if ($_SESSION['type']== "dog") {
            array_push($labels, "Main Colour", "Bushy Tail", "Name", "Age", "Type", "Weight", "Height");
        } else if($_SESSION['type']== "book"){
            array_push($labels, "Font", "Number of pages" ,"Title" ,"Price" ,"Weight" ,"Author" ,"Genre");
        } else if($_SESSION['type'] == "house") {
            array_push($labels , "Colour","Door Colour","Number of windows","Type of windows","Number of Storeys","Number of rooms ","Southfacing / Northfacing ");
        } else {
            $labels = [];
        }

        $labelsCount = count($labels) - 1;

        echo "<form method=\"post\" id=\"form1\" >";

        if(!empty($_POST["Checkboxes"])){
            foreach($_POST["Checkboxes"] as $checkbox) {
                for ($i=0; $i < 1; $i++) {                     
                    echo "<label>$labels[$checkbox]:</label>&nbsp;&nbsp;";
                    if ($_SESSION['type']== "dog") {
            
                        if(strpos($labels[$checkbox], "Main Colour")!== false){
                            echo "<select name=\"main-colour\"><option>Grey</option><option>White</option><option>Jet Black</option><option>Red</option><option>Gold</option><option>Charcoal</option><option>Silver</option></select><br>";
                        } else if (strpos($labels[$checkbox], "Bushy Tail")!== false){
                            echo "Yes<input type= \"radio\" value= \"Yes\" name=\"has-bushy-tail\">&nbsp;&nbsp;No<input type= \"radio\" value= \"No\" name=\"has-bushy-tail\"><br>";
                        } else if (strpos($labels[$checkbox], "Name")!== false){
                            echo "<input type= \"text\" name=\"dog-name\"><br>";
                        } else if (strpos($labels[$checkbox], "Age")!== false) {
                            echo "<input type= \"text\" name=\"dog-age\"><br>";
                        } else if (strpos($labels[$checkbox], "Type")!== false){
                            echo "<select name=\"dog-type\"><option>Wolfhound</option><option>Husky</option><option>Greyhound</option><option>Korean Jindo</option><option>Golden Retriever</option><option>Labrador</option><option>Samoy</option></select><br>";
                        } else if (strpos($labels[$checkbox], "Weight")!== false){
                            echo "<input type= \"text\" name=\"dog-weight\"><br>";
                        } elseif (strpos($labels[$checkbox], "Height")!== false) {
                            echo "<input type= \"text\" name=\"dog-height\"><br>";
                        } else{
                            echo ""; 
                        }
                    } else if($_SESSION['type']== "book"){
                        if(strpos($labels[$checkbox], "Font")!== false){
                            echo "<select name=\"book-font\"><option>Times New Roman</option><option>Georgia</option><option>Fantasy</option></select><br>";
                        } else if (strpos($labels[$checkbox], "Number of pages")!== false){
                            echo "<input type= \"text\" name=\"book-page-num\"><br>";
                        } else if (strpos($labels[$checkbox], "Title")!== false){
                            echo "<input type= \"text\" name=\"book-title\"><br>";
                        } else if (strpos($labels[$checkbox], "Price")!== false) {
                            echo "<input type= \"text\" name=\"book-price\"><br>";
                        } else if (strpos($labels[$checkbox], "Weight")!== false){
                            echo "<input type= \"text\" name=\"book-weight\"><br>";
                        } else if (strpos($labels[$checkbox], "Author")!== false){
                            echo "<input type= \"text\" name=\"book-author\"><br>";
                        } elseif (strpos($labels[$checkbox], "Genre")!== false) {
                            echo "<select name=\"book-genre\"><option>Horror</option><option>Action</option><option>Romance</option></select><br>";
                        } else{
                            echo ""; 
                        }
                        
                    } else if($_SESSION['type'] == "house") {
                        if(strpos($labels[$checkbox], "Colour")!== false){
                            echo "<select name=\"house-colour\"><option>Red</option><option>Black</option><option>Brown</option></select><br>";
                        } else if (strpos($labels[$checkbox], "Door Colour")!== false){
                            echo "<select name=\"house-door-colour\"><option>Red</option><option>Black</option><option>Brown</option></select><br>";
                        } else if (strpos($labels[$checkbox], "Number of windows")!== false){
                            echo "<input type= \"text\" name=\"house-windows-num\"><br>";
                        } else if (strpos($labels[$checkbox], "Type of windows")!== false) {
                            echo "<select name=\"house-windows-type\"><option>Double Glazed</option><option>Single Glazed</option><option>Triple Glazed</option></select><br>";
                        } else if (strpos($labels[$checkbox], "Number of Storeys")!== false){
                            echo "<input type= \"text\" name=\"house-storeys-num\"><br>";
                        } else if (strpos($labels[$checkbox], "Number of rooms")!== false){
                            echo "<input type= \"text\" name=\"house-rooms-num\"><br>";
                        } elseif (strpos($labels[$checkbox], "Southfacing / Northfacing")!== false) {
                            echo "S<input type= \"radio\" value= \"Southfacing\" name=\"south/north\">&nbsp;&nbsp;N<input type= \"radio\" value= \"Northfacing\" name=\"south/north\"><br>";
                        } else{
                            echo ""; 
                        }
                    } else {
                      echo "<h1>I see you did not click any values , well you can't make a object with no values</h1>";
                    }
                }
            }
            
        } else {
            echo "Click Done to see your model";
        }





        echo "<button type=\"submit\" name=\"submit\" id=\"btn\">Submit</button>";

        $message = "";
        $error = '';

        if(isset($_POST['submit'])){
            // if ($_SESSION['type']== "dog" && empty($_POST['main-colour']) || empty($_POST['has-bushy-tail']) || empty($_POST['dog-name']) || empty($_POST['dog-age']) || empty($_POST['dog-type']) || empty($_POST['dog-weight']) || empty($_POST['dog-height']) )  {
            //         $error = "<label>Enter Dog Details</label>";
            // } else if($_SESSION['type']== "book" && empty($_POST['book-font']) || empty($_POST['book-page-num']) || empty($_POST['book-title']) || empty($_POST['book-price']) || empty($_POST['book-weight']) || empty($_POST['book-author']) || empty($_POST['book-genre']) )  {
            //         $error = "<label>Enter Book Details</label>";
            // } else if($_SESSION['type'] == "house" && empty($_POST['house-colour']) || empty($_POST['house-door-colour']) || empty($_POST['house-windows-num']) || empty($_POST['house-windows-type']) || empty($_POST['house-storeys-num']) || empty($_POST['house-rooms-num']) || empty($_POST['south/north']) )  {
            //         $error = "<label>Enter Book Details</label>";
            // } else {

            
            if(file_exists('data.json')){
                $current_data = file_get_contents('data.json');
                $array_data = json_decode($current_data , true);

                if ($_SESSION['type']== "dog") {
                    $extra = array(
                        'Main_Colour' => $_POST['main-colour'],
                        'Bushy_Tail' => $_POST['has-bushy-tail'],
                        'Dog_Name' => $_POST['dog-name'],
                        'Dog_Age' => $_POST['dog-age'],
                        'Dog_Type' => $_POST['dog-type'],
                        'Dog_Weight' => $_POST['dog-weight'],
                        'Dog_Height' => $_POST['dog-height'],

                    );
                } else if($_SESSION['type']== "book"){
                    $extra = array(
                        'Book_Font' => $_POST['book-font'],
                        'Number_Of_Pages' => $_POST['book-page-num'],
                        'Book_Title' => $_POST['book-title'],
                        'Book_Price' => $_POST['book-price'],
                        'Book_Weight' => $_POST['book-weight'],
                        'Book_Author' => $_POST['book-author'],
                        'Book_Genre' => $_POST['book-genre'],

                    );


                } else if($_SESSION['type'] == "house") {
                    $extra = array(
                        'House_Colour' => $_POST['house-colour'],
                        'Door_Colour' => $_POST['house-door-colour'],
                        'Number_Of_Windows' => $_POST['house-windows-num'],
                        'Type_Of_Windows' => $_POST['house-windows-type'],
                        'Number_Of_Storeys' => $_POST['house-storeys-num'],
                        'Number_Of_Rooms' => $_POST['house-rooms-num'],
                        'Southfacing/Northfacing' => $_POST['south/north'],

                    );

                } else {
                        
                } 

                $array_data[] = $extra;
                $final_data = json_encode($array_data);
                file_put_contents('data.json', $final_data); 


            } else {
                $error = 'JSON File does not exist';
            }
        }
    // }

       

        echo "</form>";

        echo "<img src=\"Images/3DPrinting.gif\" class=\"img\">"

        /*This is how to check which checkboxes have been clicked , give everyone of the checkboxes
        a name like "Checkboxes[]" and then you can refer to them in the page you posted them too by using the !empty function
        and checking whether the "$_POST["Checkboxes"]" is indeed empty and if not run a loop on them and output them one by one 
        Note : each checkbox must have a different value set */


        



    ?>

    



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>

//this is one way of changing the data from the form into objects and sending them as json except i don't know how to send the 
// json formatted result so we're going to try above method using all php and sending all the data to a json file 


//I'm transferring the form data into an url call and posting it to other JSONformatter.php page so that I can 
//access it and pull it back into the app  
    // $.fn.serializeObject = function() {
    //     var object = {};
    //     var arrayOfObjects = this.serializeArray();
    //     $.each(arrayOfObjects, function(){
    //         console.log(object[this.name]);
    //         //We just console.logged above and found that everything was undefined this was because there 
    //         // was indeed nothing in the object at this time so what we're saying is when the object is undefined push the this.name into the object 
    //         // so it looks something like this {name : Adam}
    //         if(object[this.name]!== undefined){
    //             if (!object[this.name].push) {
    //                 object[this.name] = [object[this.name]];
    //             }
    //             object[this.name].push(this.value || '');  
    //         } else {
    //             object[this.name] = this.value || '';
    //         }
    //     });
        
    //     return object;
        
    // };

    // $('form').submit(function(event){
    //     var result = $('form').serializeObject();
    //     //This basically just makes an object out of each of the form inputs
    //     var jsonResult = JSON.stringify(result);
    //     console.log(jsonResult);
    //     $.get('JSONFormatter.php', {data: jsonResult} , function(response){
    //         $('#results').html(jsonResult);
    //     });

    //     event.preventDefault();

    // });

        var button = document.querySelector('#btn');
        var text = document.querySelector('h2');
        var form = document.querySelector('#form1');
    $(button).click(function(event){
        var image = document.querySelector('.img');
        $(image).css('display', 'none');
        $(button).css('display', 'none');
        $(text).css('display', 'none');
    });

        



</script>

 </body>
 </html>