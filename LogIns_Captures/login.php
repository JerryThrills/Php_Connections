<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Login Form</title>
    <style>
    body{margin: 0;
    padding: 0;
    background: #28231e;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    font-family:verdana;
    width:500px; margin: 0 auto;
    font-size: 1.5em;
    height: 85px;
}
h3{line-height:20px;font-size:20px;}
input{display:block;width:350px;height:20px;margin:10px 0;}
textarea{display:block;width:350px;margin:10px 0;}
/* #button{background:green; border:1px solid green;width:70px;} */

/*Image growimg big*/
#myform{ position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);}
    form{
        
      width: 100%;
      /* height: 100%; */
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 30px 0 #095484; 
      
    }
    #button{
         width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #095484;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      #button:hover {
      background: #0666a3;
      }
      h3{
          justify-content: center;
          align-items: center;
          align-content: center;
          color: #0666a3;
      }
      #button{
        animation-name: move;
    animation-duration: 10s;
    animation-timing-function: linear;
    animation-delay: 10s;
    animation-iteration-count: infinite;
      }
      @keyframes move {
    0%{
        background: red;
        transform: translate(0px, 0px);
    }
    50%{
        background: yellow;
        transform: translate(10px, 10px); 
    }
    100%{
        background: black;
        transform: translate(20px, 20px);
    }
    
}
    </style>
</head>
<body>
    <form action="login1.php" method="POST" id="myform">
    <h3>LOGIN</h3>
        Username:<input type="text" name="name" id="name" placeholder="enter username"><br>
        REGNO:<input type="text" name="test" id="user" placeholder="registration number"><br>
        AcessNo:<input type="text" name="dolphin" id="wong" placeholder=" Acess number"><br>
        Year:<input type="number" name="phpi" id="wong" placeholder="Enter Year"><br>
        Course:<input type="text" name="coding" id="user"><br>
        Semester:<input type="text" name="code" id="wong" placeholder="Semester"><br>
        AmountPaid:<input type="number" name="cod" id="user"><br>
        <!-- Password:<input type="password" name="test" id="user"><br> -->
        <!--Exam:<input type="text" name="tests" id="users"><br> -->
        <input type="submit" value="REGISTER" id="button" style="justify-content: center;">
    </form>
</body>
</html>