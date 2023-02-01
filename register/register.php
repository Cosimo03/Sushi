<?php 
    include('config_register.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: brown">
<header class="header">
      <div class="pageBody">
        <span class="brand"> Sushi House </span>
        <div class="pageBodyRight">
          <a class="section selected" href="index.php"> Home </a>
          <a class="section" href="reservation.php"> Reservation </a>
          <a class="section" href=""> Menù </a>
          <a class="section" href=""> Contact </a>
          <a href="">
            <img src="imgs/shopping-cart.png" class="cart" />
          </a>
        </div>
      </div>
    </header>

    <form method="post" action="register.php">
        <?php include('../errors.php'); ?>
        <div>
            <label for="username">Username</label>
            <input type="text" value="<?php echo $username;?>" name="username">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" value="<?php echo $email;?>" name="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password"  name="password_1">
        </div>
        <div>
            <label for="password">Confirm your password</label>
            <input type="password" name="password_2">
        </div>
        <div>
            <button type="submit" name="reg_user">register</button>
        </div>
    </form>
    

</body>
</html>