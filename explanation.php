<?php 


    $img = "";

    if ($_SESSION['type']== "dog") {
        $img = "Images/DogOBJ.JPG";
    } else if($_SESSION['type']== "book"){
        $img = "Images/BookOBJ.JPG";
    } else if($_SESSION['type'] == "house") {
        $img = "Images/HouseOBJ.JPG";
    } else {
        $img = "";
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

        .enterImg{
            width: 4vw;
            left: 15vw;
            top: 9vh;
            position: relative;
            height: 8vh;
        }

        h1, h3{
            display: flex;
            justify-content:center;

        }
        h1{
            position: relative;
            top: 15vh;
        }

        h3{
            position: relative;
            top: 0vh;
        }


        img{
            width: 40vw;
            height:40vh;
            margin: 2vh 10vw;
        }
    
        .arrowTwo{
            position: relative;
            top: -46vh;
            width: 20vw;
            left: 30vw;
            animation: firstExplain 9.5s forwards;
        }

        .arrowFour{
            position: relative;
            top: -92vh;
            height: 26vh;
            width: 20vw;
            left: 28vw;
            opacity: 0;
            animation: secondExplain 9.5s 9.5s forwards;
        }

        .firstExplain{
            position: relative;
            top: -69vh;
            margin-left: 61vw;
            text-align: center;
            opacity : .1;
            animation: dropIn 9.5s forwards;

        }

        .secondExplain{
            position: relative;
            top: -111vh;
            margin-left: 59vw;
            text-align: center;
            opacity: 0;
            animation: dropIn2 9.5s 8.5s  forwards;
        }

        @keyframes firstExplain{
            0%{transform:translateX( 30px);}
            50%{transform:translateX(0px); opacity:.8;}
            100%{transform:translateX( 30px); opacity:0;}
        }

        @keyframes dropIn {
            0%{transform : translateY(-90px); opacity:.3;}
            50%{transform: translateY(0px); opacity: 1;}
            100%{transform : translateY(-90px); opacity:0;}
        }

        @keyframes dropIn2 {
            0%{transform : translateY(-90px); opacity:.3;}
            50%{transform: translateY(0px); opacity: 1;}
            100%{transform : translateY(0px); opacity:1;}
        }
        
        

        @keyframes secondExplain {
            0%{transform:translateX( 25px);}
            50%{transform:translateX(0px); opacity:.8; }
            100%{ opacity:1; }
        }



    </style>
</head>
<body>

    <h1>What's going on in this code?</h1> <img src="Images/Picture1.png" alt="" class="enterImg">
    <h3>This code represents what you just did on previous two pages</h3>

    <img src="<?php echo $img ?>" alt="">
    <img src="Images/Picture2.png" alt="" class="arrowTwo">
    <h3 class="firstExplain">This is the same as picking to make the <?php echo $_SESSION['type']; ?> as an object </h3>
    <img src="Images/Picture3.png" alt="" class="arrowFour">
    <h3 class="secondExplain">This is the same as ticking checkboxes and giving your <?php echo $_SESSION['type']; ?>  some properties.
 </h3>

    
</body>
</html>