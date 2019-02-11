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

        div{
            width: 80vw;
            top: -1000px;
            position:relative;
            margin: 7vh auto;
            height: 87vh;
            transform-origin: 5vh 70vw;
            background: rgba(255,241,118,1);
            animation: fallDown 3.5s ease forwards;
        }

        @media screen and (min-width:20em) {  /*320px*/
            div{
                width: 95vw;
                margin: 30vh auto;
                height: 43vh;
            }

        }

        .enterImg{
            width: 4vw;
            left: 5vw;
            top: 9vh;
            position: relative;
            height: 8vh;
        }

        @media screen and (min-width:20em) {  /*320px*/
            .enterImg{
                width: 4vw;
                left: 3vw;
                top: 1vh;
                height: 3vh;
            }
        }

        h1, h3{
            display: flex;
            justify-content:center;

        }

        
        h1{
            position: relative;
            top: 15vh;
        }

        @media screen and (min-width:20em) {  /*320px*/
            h1{
                font-size: 16px;
                top: 6vh;
            }

        }

        h3{
            position: relative;
            top: 0vh;
        }
        @media screen and (min-width:20em) {  /*320px*/
            h3{
                top: -4vh;
                left: 5vw;
                font-size: 9px;
                text-align: center;
            }

        }


        img{
            width: 40vw;
            height:40vh;
            margin: 2vh 10vw;
        }

        @media screen and (min-width:20em) {  /*320px*/
            img{
                width: 69vw;
                position: relative;
                top: -4vh;
                height: 22vh;
                margin: 2vh 5vw;
            }

        }
    
        .arrowTwo{
            position: relative;
            top: -46vh;
            width: 20vw;
            left: 30vw;
            animation: firstExplain 9.5s .5s  forwards;
        }

        @media screen and (min-width:20em) {  /*320px*/
            .arrowTwo{
                top: -26vh;
                width: 13vw;
                height: 10vh;
                left: 27vw;
            }

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

        @media screen and (min-width:20em) {  /*320px*/
            .arrowFour{
                top: -49vh;
                height: 10vh;
                width: 13vw;
                left: 50vw;
            }

        }

        .firstExplain{
            position: relative;
            top: -69vh;
            margin-left: 61vw;
            text-align: center;
            opacity : .1;
            animation: dropIn 9.5s .5s forwards;

        }

        @media screen and (min-width:20em) {  /*320px*/
            .firstExplain{
                top: -60vh;
            }

        }

        .secondExplain{
            position: relative;
            top: -111vh;
            margin-left: 59vw;
            text-align: center;
            opacity: 0;
            animation: dropIn2 9.5s 8.5s  forwards;
        }

        @media screen and (min-width:20em) {  /*320px*/
            .secondExplain{
                top: -60vh;
            }

        }

        button{
            position: relative;
            top: -93vh;
            left: 65vw;
            font-size: 20px;
            background: rgba(255,241,118,1);
            border: none;
        }

        @media screen and (min-width:20em) {  /*320px*/
            button{
                top: -52vh;
                left: 76vw;
                font-size: 9px;
            }
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

        @keyframes fallDown{
            0%{opacity: 0; transform : rotateZ(-270deg);}
            70%{ transform: translateY(1000px);}
            100%{transform : translateY(1000px); opacity: 1;}
        }

        



    </style>
</head>
<body>
    <div>
        <h1>What's going on in this code?</h1> <img src="Images/Picture1.png" alt="" class="enterImg">
        <h3>This code represents what you just did on previous two pages</h3>

        <img src="<?php echo $img ?>" alt="">
        <img src="Images/Picture2.png" alt="" class="arrowTwo">
        <h3 class="firstExplain">This is the same as picking to make the <?php echo $_SESSION['type']; ?> as an object </h3>
        <img src="Images/Picture3.png" alt="" class="arrowFour">
        <h3 class="secondExplain">This is the same as ticking checkboxes and giving your <?php echo $_SESSION['type']; ?> some properties.</h3>
        <button>Continue</button>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        var button = document.querySelector('button');
        var div = document.querySelector('div');
        $(button).click(function(){
            $(div).css('display', 'none'); 
        });
    
    </script>
    
</body>
</html>