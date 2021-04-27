<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    body{
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100vh;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
      color: white;
      font-weight: 200;
      overflow: hidden;
      position: relative;
    }
    .background{
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(./banner.jpg);
      background-repeat: no-repeat;
      background-position: center;
      overflow: hidden;
      animation: zoom 10s linear infinite;
      animation-delay: 4s;
    }
    .container{
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }
    .hello{
      margin-top: -50px;
      font-size: 40px;
      padding: 20px;
      animation: top_bottom 2s forwards;
    }
    .welcome{
      font-size: 25px;
      margin-bottom: 15px;
      animation: left 2s forwards;
      animation-delay: 1s;
      opacity: 0;
    }
    span{
      color: #52e5e7;
      font-weight: 300;
      animation: right 2s forwards;
      animation-delay: 1s;
      margin-bottom: 20px;
      opacity: 0;
    }
    .start{
      text-decoration: none;
      color: white;
      display: inline-block;
      padding: 12px 20px;
      border-radius: 50px;
      background: linear-gradient(to right, #5efce8,#736efe);
      opacity: 0;
      animation: top_top 2s forwards;
      animation-delay: 2s;
    }
    @keyframes top_bottom{
      0%{
        transform: translateY(-100px);
        opacity: 0;
      }
      100%{
        transform: translateY(0);
        opacity: 1;
      }
    }
    @keyframes top_top{
      0%{
        transform: translateY(100px);
        opacity: 0;
      }
      100%{
        transform: translateY(0);
        opacity: 1;
      }
    }
    @keyframes left{
      0%{
        transform: translateX(-100px);
        opacity: 0;
      }
      100%{
        transform: translateX(0);
        opacity: 1;
      }
    }
    @keyframes right{
      0%{
        transform: translateX(100px);
        opacity: 0;
      }
      100%{
        transform: translateX(0);
        opacity: 1;
      }
    }
    @keyframes zoom{
      0%{
        transform: scale(1);
      }
      25%{
        transform: scale(1.1);
      }
      50%{
        transform: scale(1.2);
      }
      75%{
        transform: scale(1.1);
      }
      100%{
        transform: scale(1);
      }
    }
    
  </style>
</head>
<body>
  <div class="background">
  </div>
  <div class="container">
    <div class="hello">Hello!!!</div>
    <div class="welcome">
      Welcome to our chat application
    </div>
    <span>Products made by CTU_students  </span>
    <div><a href="./register.php" class="start">Let's Started</a></div>
  </div>
</body>
</html>