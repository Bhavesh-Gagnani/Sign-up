<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>index</title>
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
            z-index: 2;
            box-shadow: 6px 6px 0 0 rgb(0, 0, 0);
        }

        #close{
            font-size: 30px;
            position: absolute;
            top: 7px;
            right: 12px;
            transition: 0.7s;
        }

        .under{
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form{
            width: 250px;
        }

        .under h6{
            margin: 0;
            font-size: 48px;
            text-align: center;
        }

        .under #Name{
            width: 48%;
            margin-top: 21px;
            padding: 10px 18px 10px 12px;
            border: 2px solid black;
            border-radius: 4px
        }

        .under #SurName{
            width: 48%;
            margin-left: 6px;
            margin-top: 21px;
            padding: 10px 18px 10px 12px;
            border: 2px solid black;
            border-radius: 4px
        }

        .under #Email{
            width: 100%;
            margin-top: 10px;
            padding: 10px 18px 10px 12px;
            border: 2px solid black;
            border-radius: 4px
        }

        .under #password{
            width: 100%;
            margin-top: 10px;
            padding: 10px 18px 10px 12px;
            border: 2px solid black;
            border-radius: 4px
        }

        .under #submit{
            width: 100%;
            margin-top: 18px;
            padding: 6px 24px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid transparent;
            border-radius: 6px;
            text-transform: uppercase;
            color: white;
            font-weight: 900;
            background-color: black;
            transition: 0.375s;
        }

        .under #submit:hover{
            border: 2px solid transparent;
            color: black;
            background-color: rgb(30,160,160);
            box-shadow: 3px 2px 10px 0 rgb(0, 0, 0);
        }

        .again{
            height: 100%;
            width: 100%;
            display: none;
            position: relative;
            background: linear-gradient(rgb(225,245,250),rgb(145,225,240));
        }

        .try{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            text-align: center;
        }

        .try h1{
            margin: 0;
            font-size: 64px;
            color: #ff0000;
        }

        .try button{
            font-size: 18px;
            font-weight: 600;
            margin-top: 24px;
            padding: 12px 36px;
            border: 0.5px solid black;
            border-radius: 50px;
            background: black;
            color: white;
            transition: 0.7s;
        }

        .try button:hover{
            border: 0.5px solid transparent;
            color: black;
            background: rgb(35,175,175);
            box-shadow: 3px 6px 10px 0 rgb(0, 0, 0);
        }

    </style>
</head>
<body>

    <section class="signup" id="signup">
        <div class="container">
            <i class="fa-solid fa-xmark" id="close" onclick="hide()"></i>
            <div class="under">
                <form action="next.php" method="POST">
                    <h6>Sign up</h6>
                    <input type="text" name="name" placeholder="Name" id="Name">
                    <input type="text" name="surname" placeholder="Surname" id="Surname">
                    <input type="email" name="email" placeholder="Email" id="Email"><br>
                    <input type="password" name="password" placeholder="Password" id="password"><br>
                    <input type="submit" name="submit" id="submit" value="Next">
                </form>
            </div>
        </div>
    </section>

    <section class="again" id="again">
        <div class="try">
            <h1>Oops !!!</h1>
            <button onclick="del()">Sign up</button>
        </div>
    </section>

    <script>

        let signup = document.getElementById("signup")
        let again = document.getElementById("again")

        function hide(){
            signup.style.display = "none";
            again.style.display = "block";
        }
        
        function del(){
            again.style.display = "none";
            signup.style.display = "block";
        }

    </script>

</body>
</html>
