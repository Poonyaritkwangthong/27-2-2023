<?php
   session_start();
   if(!isset( $_SESSION["username"]))
   $show=header("location:login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="store.css">
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
        <li class="about"><a class="active" href="#">PROGRAM</a>
          <ul>
            <li><a href="program.php">News #1</a></li>
            <li><a href="#">News #1</a></li>
            <li><a href="#">News #1</a></li>
          </ul>
        </li>
        <li class="News"><a href="#">REGISER</a></li>
        <li href="Contact"><a href="login.php">LOGIN</a></li>
        <div>
        <?php
if(isset($_SESSION["firstname"])){
    echo "<div class='text-success'>";
    echo $_SESSION["firstname"] ." ". $_SESSION["lastname"] ;
    echo "</div>";
}

?>
<br>
<a href="logout.php">Logout</a>
</div>
        </ul>
      </div>
      <div class="head">
        <h1>
            STROE
        </h1>
      </div>


      <div class="grid grid-cols-3 gap-10 mt-10 w-3/4 mx-auto">
      <?php
                                include 'condb.php';
                                $sql =  'SELECT * FROM product order by dpr_id';
                                $result = mysqli_query($conn,$sql);
                                while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                            ?>
<div class="max-w-sm rounded overflow-hidden shadow-lg bg-white">
  <img class="w-full" src="<?php echo $row["dpr_image"];?>" alt="Sunset in the mountains">
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2"><?php echo $row["dpr_name"];?></div>
    <p class="text-gray-700 text-base">
    <?php echo $row["dpr_detail"];?>
    </p>
  </div>
  
</div>

<?php
                                }
                                mysqli_free_result($result);
                                mysqli_close($conn);
                            ?>
    </div>
</body>
</html>