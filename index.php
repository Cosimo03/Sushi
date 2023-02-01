<?php session_start()?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sushi House</title>

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
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

    <div class="home">
      <div class="box">
        <span class="s1"> WELCOME TO SUSHI HOUSE </span>
        <span class="s2">
          Serving delicious sushi directly from Taranto's sea</span
        >
        <div class="tableButton">
          <a href="reservation.html">Find a Table</a>
        </div>
      </div>
    </div>

    <footer></footer>
  </body>
</html>
