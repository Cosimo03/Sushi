<?php
  session_start();
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header class="header">
      <div class="pageBody">
        <span class="brand"> Sushi House </span>
        <div class="pageBodyRight">
          <a class="section" href="index.php"> Home </a>
          <a class="section selected" href="reservation.php"> Reservation </a>
          <a class="section" href=""> Menù </a>
          <a class="section" href=""> Contact </a>
          <a href="">
            <img src="imgs/shopping-cart.png" class="cart" />
          </a>
        </div>
      </div>
    </header>

    <div class="corpoReservation">
      
      <div id="reservation" class="reservation" tabindex="">
        <div class="modalBody">
          <span> You're reserving table #####</span>
        </div>
        <div class="modalFooter">
          <div class="modalButtons">
            <div>
              <span id="close">close</span>
            </div>
            <div>
              <span>Reserve</span>
            </div>
          </div>
        </div>
      </div>

      <div id="notlogged" class="reservation">
        <div class="nl-modalbody">
          <div>
            <label for="email">EMAIL</label>
            <input type="email" id="email-input" name="email" placeholder="email" value="<?php echo $email?>">  
              
          </div>
          <div>
              <label for="password">Password</label>
              <input type="password" name="password" value="">
          </div>

          <div>
            
          </div>
        </div>
      </div>

      <div class="room">
        <div class="halfRoom d1">
          <div class="row">
            <div id="1" class="table d4"></div>
            <div id="2" class="table d4"></div>
            <div id="3" class="table d4"></div>
          </div>
          <div class="row">
            <div id="4" class="table d8"></div>
            <div id="5" class="table d4"></div>
          </div>
          <div class="row">
            <div id="6" class="table d8"></div>
            <div id="7" class="table d4"></div>
          </div>
        </div>
        <div class="halfRoom d2">
          <div id="8" class="table d16"></div>
          <div id="9" class="table d16"></div>
        </div>
      </div>
    </div>

    <script>
      let tables = document.getElementsByClassName("table");
      let reservation = document.getElementById("reservation");
      let close = document.getElementById("close");
      
      

      
    </script>

    <?php
      if (isset($_SESSION['email'])){
        echo '<script>
        for (table of tables) {
        table.addEventListener("click", (table) => {
          reservation.style.display = "flex";
        });
        }

        close.addEventListener("click", () => {
          reservation.style.display = "none";
        });
        </script>';
      }
    ?>
          
        

  </body>
</html>
