<?php
session_start();
if(!isset($_SESSION["username"]))
   header("location:index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="head1.css">
</head>
<body>
  <div class="nav">
    <ul>
      <li class="home"><a href="index.php">HOME</a></li>
      <li class="tutorials"><a href="store.php">STROE</a>
      <ul>
        <li><a href="#">Tutorials #1</a></li>
        <li><a href="#">Tutorials #2</a></li>
        <li><a href="#">Tutorials #3</a></li>
      </ul>
    </li>
    <li class="about"><a class="active" href="">PROGRAM</a>
      <ul>
        <li><a href="program.php">News #1</a></li>
        <li><a href="#">News #1</a></li>
        <li><a href="#">News #1</a></li>
      </ul>
    </li>
    <li class="News"><a href="#">REGISER</a></li>
    <li href="Contact"><a href="login.php">LOGIN</a></li>
    </ul>
  </div>
  <div class="content">
    <h1>POPULAR PICTURE</h1>
  </div>
<div class="main">
  <div class="slide">
    <figure>
     <img src="/6414421006/Project/image/anime1.webp">
     <img src="/6414421006/Project/image/man1.webp">
     <img src="/6414421006/Project/image/car1.jpg">
     <img src="/6414421006/Project/image/view1.jpg">
     <img src="/6414421006/Project/image/anime1.webp">
    </figure>
  </div>
</div>
    <div class="footer">
      <div class="ft-1">
         <h1>POPULAR WORKS THIS WEEK</h1>
      </div>
      <div class="ft-2">
         <p1>Next week there will be a new ranking</p1>
      </div>
    </div>  
  </body>
  </html>