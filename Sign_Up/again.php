<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <style>
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }
        .signup{
            height: 100%;
            width: 100%;
            display: block;
            background: radial-gradient(rgba(255,255,255,0.9),rgba(20,210,210,0.75));
            position: relative;
        }
        .container{
            width: 350px;
            height: 400px;
            background-color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            border: 1.5px solid black;
            border-radius: 18px;
            z-index: 1;
            box-shadow: 6px 6px 8px 0 rgb(0, 0, 0);
        }
        .main{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            text-align: center;
        }
        h1{
            position: absolute;
            top: -110px;
            left: -123px;
            margin: 0;
            color: red;
            font-size: 84px;
            line-height: 1;
            font-family: 'Playfair Display', serif;
        }
        a{
            position: absolute;
            top: 90px;
            left: -60px;
            font-size: 24px;
            font-weight: 600;
            padding: 9px 36px 14px;
            list-style-type: none;
            text-decoration: none;
            border: 0.5px solid black;
            border-radius: 50px;
            background: black;
            color: white;
            transition: 0.7s;
        }
        a:hover{
            border: 0.5px solid transparent;
            color: black;
            background: rgb(35,175,175);
            box-shadow: 3px 6px 10px 0 rgb(0, 0, 0);
        }
    </style>
</head>
<body>
    <section class="signup">
        <div class="container">
            <div class="main">
                <h1>Thank You</h1>
                <a href="index.php">Again</a>
            </div>
        </div>
    </section>
    
</body>
</html>