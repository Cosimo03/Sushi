<?php
    session_start();
    include '../login/logout.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
      <div class="pageBody">
        <span class="brand"> Sushi House </span>
        <div class="pageBodyRight">
          <a class="section" href="../index/index.php"> Home </a>
          <a class="section" href="../reservation/reservation.php"> Reservation </a>
          <a class="section" href="../menu/menu.php"> Menù </a>
          <a class="section" href=""> Contact </a>
          <a class="selected" href="user.php">
            <img class="user" src="../imgs/user.png" alt="">
          </a>
          <a href="../cart/cart.php">
            <img src="../imgs/shopping-cart.png" class="cart" />
          </a>
        </div>
      </div>
    </header>
    <?php
        if(!isset($_SESSION['email'])){
            echo ('codice registrazione/login');
        }
        else{
            $username = $_SESSION['username'];
            echo  ("ciao '$username' ");
            echo ('<form action="user.php" method="post">
                   <button type="submit" name="logout"> logout </button>
                   </form>');
        }
    ?>
</body>
</html>