<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/pic/logo1.ico" />
    <title>LearnHTML</title>
    <link rel="stylesheet" href="/resources/css/styleHTML.css" />
    <style>
        *{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        body{
            overflow: hidden;
            background-color: white;
        }
        .group1{
            width: 100vw;
            margin-top: 50px;
            height: 92vh;
            display: flex;
            justify-content: center;
            align-items: center;
            gap:50px;
        }
        .img{
            width:fit-content;
        
        }
        .center, .img{
            width: fit-content;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: #1f1f1f;
        }
        h1{
            font-size: 52px;
            letter-spacing: 6px;
            text-align: center;
            margin: 0;
            padding: 15px 0;
        }
        h2{
            font-size: 18px;
            font-weight: 400;
            margin: 0;
            padding: 5px 0;
        }
    </style>
</head>
<body>
     <!-- Load Menu from component -->
     <?php require 'resources/component/menu.php'; ?>


    <div class="group1">
        <div class="img">
            <img src="/pic/meenu.png" alt="cartoon" height=450px>
        </div>
    
        <div class="center">
            
            <h1 style="text-align:center;">AWWW.. DON'T CRY</h1>
            <h2 style="text-align:center;">It just 404 Error !</h2>
            <h2 style="text-align:center;">What you are looking for may have been misplaced in Long Term Memory.</h2>
        </div>


    </div>
</body>
</html>