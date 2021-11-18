<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>  
    <!-- font 1 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@700&display=swap" rel="stylesheet">
    <!-- font 2 -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <style>
        *{
            box-sizing: border-box; 
        }
        body{   
            margin: 0;
            font-family: 'Maven Pro', sans-serif;
        }
        #main{
            display: flex;
            min-height: 100vh;
            
        }
        #main-background{
            flex-basis: 40%;
            background-image: url('http://localhost/khachsan/img/15.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            
        }
        #main-form{
            flex-basis: 60%;
            display: flex;
            align-items: center;
            justify-content: center;
           
        }
        #main-form-control{
            min-width: 600px;
           
        }
        #main-form-header{
            text-align: center;
        }
        #main-form-header h1{
            font-size: 60px; 
            color: #2ecc71;
              
        }
        #main-form-header b{
            font-size: 15px ;  
            font-family: 'Montserrat', sans-serif !important; 
            letter-spacing: 5px;
           
        }
        #main-form-body .ipt, #main-form-body-content .list-sever{
            border: solid 1px #2ecc71 ;
            background: transparent;
            outline: none;
            width: 100%;
            padding: 5px 10px;
            height: 40px;
            border-radius: 5px;           
        }       
        .mb-3{
            margin-bottom: 30px;
            line-height: 30px;
        }
        .cgbt{
            text-align: center;
            line-height: 100px;
            
        }
        .abc{
            background-color: #1dd1a1; 
            border-radius: 5px;
            border: #f6e58d;
            color: white;
            padding: 15px 32px;
            text-align: center;
            font-size: 16px;
        }
        .abc > a{
            text-decoration: none;
            color:white;
        }
        .def{
            background-color: #27ae60;
            border-radius: 5px; 
            border: #ffbe76;
            color: white;
            padding: 15px 25px;
            text-align: center;
            font-size: 16px;
        }
       
    </style>
</head>
<body>
<form action="ielogin.php" method="post">
    <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <div id="main">
        <!-- Phần ảnh nền bên trái -->
        <div id="main-background"></div>
        <!-- Phần form header, input, button -->
        <div id="main-form">
            <div id="main-form-control">
                <!-- Phần header  -->
                <div id="main-form-header">
                    <h1>Chill Garden</h1>
                    <b>Have a good day </b>   
                </div>
                <!-- Phần input, button -->
                <div id="main-form-body">
                    <div id="main-form-body-content">
                        <!-- input 1 -->
                        <div class="row-item mb-3">
                            <label>Username</label> 
                            <input class="ipt" placeholder="Nhập tài khoản của bạn"/>
                        </div>
                        <!-- input 2 -->
                        <div class="row-item mb-3">
                            <label>Password</label>
                            <input class="ipt" type="password" placeholder="Nhập mật khẩu của bạn"/>
                        </div>
                        <!-- button -->
                        <div class="row-item cgbt">
                            <button class="abc" type="submit"><a href="http://localhost/khachsan/PHP/chillgarden2.php">Login</a></button>                
                        </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>