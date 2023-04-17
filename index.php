<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./static/jquery.min.js"></script>
    <script src="./sweetalert/dist/sweetalert.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/mm.css" rel="stylesheet"> 
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./sweetalert/dist/sweetalert.min.js"></script>
    <link href="./fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @font-face {
             font-family: myFirstFont;
             src: url("./css/Josefin_Sans/static/JosefinSans-Medium.ttf");
        }


    body{
        font-family: 'myFirstFont'; 
    }
    input{
      border-top-style: hidden;
      border-right-style: hidden;
      border-left-style: hidden;
      border-bottom-style: groove;
    }
    .no-outline:focus {
     outline: none;
    }
    h4{
      /* Increase this as per requirement */
      padding-bottom: 10px;
      border-bottom-style: solid;
      border-bottom-width: 3.1px;
      width: fit-content;
    }
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
     background-color: white;
    }
    li {
      float: left;
      /* text-align: center; */
    }
    li a {
      display: block;
      color: black;
      text-align: center;
      padding: 16px;
      text-decoration: none;
    }
    </style>    
    <title>Login</title>
</head>
<body><br><br>  
<center><img src="./img/Xyma_BG.svg" width="200px"></img></center><br><br>
<center><h4>Login</h4></center><br> 
<div style="display: flex; justify-content: center; align-items: center; height: 30vh;">
  <form action="" method="post">
    <input type="email" name="email" class="no-outline email" id="exampleFormControlInput1 email" placeholder="Email" size="30"><br><br>
    <input type="password" name="password" class="no-outline password" id="exampleFormControlInput1 password" placeholder="Password" size="30"><br><br><br>
    <center><input type="Submit" name="login" class="btn btn-dark" placeholder="Login"></center>
  </form>
</div><br><br>
<center> 
<p><b>© 2021 XYMA Analytics Inc. IIT Madras Research Park, Chennai, 600113</b></p>
</center>   
</body>
</html>
