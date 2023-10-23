<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPIUM</title>
    <style>
        .succ_container{
            position : relative;
        }
        .succ_container::after{
            content : "";
            width : 90%;
            height : 80%;
            border : 0.75rem solid white;
            background : none;
            position : absolute;
             border-radius : 10px ;
        }
    </style>
</head>
<body>
    
    <div class="succ_container" style="margin : auto; border-radius : 10px ;
     background : black; height : 97vh;
     
     display : flex; align-items : center;
     justify-content : center;
     flex-direction : column">
        <h1 style="color : white; font-size : 5rem">
            Reservé avec succès
        </h1>
        <a href="/" style="font-size : 2rem; color : white;z-index : 999">Retourner a l'Acceuil</a>
    </div>


</body>
</html>