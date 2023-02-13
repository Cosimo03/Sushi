<?php
  include 'menu_conn.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <header id="header" class="header">
      <div class="pageBody">
        <span class="brand"> Sushi House </span>
        <div class="pageBodyRight">
          <a class="section" href="../index/index.php"> Home </a>
          <a class="section" href="../reservation/reservation.php"> Reservation </a>
          <a class="section selected" href="../menu/menu.php"> Menù </a>
          <a class="section" href=""> Contact </a>
          <a class="" href="../user/user.php">
            <img class="user" src="../imgs/user.png" alt="">
          </a>
          <a href="../cart/cart.php">
            <img src="../imgs/shopping-cart.png" class="cart" />
          </a>
        </div>
      </div>
    </header>

    <div class="menubody">
      <div class="sideList">
        <div class="searchBar">
          <input type="search" placeholder="Search here">
          <span> Menu </span>
        </div>
        <div class="menuList" id="menuList">
          

        </div>
      </div>
      <div class="productList" id="productList">
        <div class="productBody"> 
          <div class="productImageInfo">
            <img src="../imgs/istockphoto-621899966-612x612.jpg" alt="">
            <div class="productInfo">
              <div class="productName"> Sashimi di salmone </div>
            <div class="productPrice">
              <div class="productPriceEur"> 3 </div>
              <div class="productPriceCent"> .99$ </div>
            </div>
          </div>
          </div> 

          <div class="productBuy"> 
            <div class="productAdd">
              <span>+</span>
            </div>
            <div class="productNumber">
              0
            </div>
            <div class="productRemove">
              -
            </div>
          </div>
        </div>
        <div class="productBody"> 
          <div class="productImageInfo">
            <img src="../imgs/istockphoto-621899966-612x612.jpg" alt="">
            <div class="productInfo">
              <div class="productName"> Sashimi di salmone </div>
            <div class="productPrice">
              <div class="productPriceEur"> 3 </div>
              <div class="productPriceCent"> .99€ </div>
            </div>
          </div>
          </div> 

          <div class="productBuy"> 
            <div class="productAdd" id="40">
              <span>+</span>
            </div>
            <div class="productNumber" id="40">
              0
            </div>
            <div class="productRemove">
              -
            </div>
          </div>
        </div>
      </div>
      
  </div>

  <!-- <div class="scheda">
        <div class="image"> 
          <img src="../imgs/pngfind.com-ramen-noodles-png-3165225.png" alt="">
        </div>
        <div class="name">
          <span>
            ramen profumato
          </span>
        </div>
        <div class="bot"> 
          <span class="price">
            price
          </span>
          <span class="buttons">
            add
          </span>
        </div>
      </div> -->

  <script>
    // let header = document.getElementById("header");
    // let lastScroll = 0;

    // window.addEventListener('scroll', ()=>{

    //   let position = window.pageYOffset;

    //   if(position >= lastScroll) {
    //     header.style.display = 'none';
    //     lastScroll = position;
    //   }

    //   else if( position < lastScroll){
    //     header.style.display = 'flex';
    //     lastScroll = position;
    //   }

    // })
  </script>
  <?php
    echo ('<script>
    let menuList = document.getElementById("menuList");
    let productList = document.getElementById("productList");
    console.log('. $result . ');
    for (e of '. $result .' ){
      menuList.innerHTML += ` <a href="#${e.name}"> ${e.name}  </a> `;
      productList.innerHTML +=  ` <div class = "category" id="${e.name}"> 
      <div class = "categoryName"> <span> ${e.name} </span> </div>  
      <div class = "categoryItems"> </div>                           
      </div>`;
    }
  </script>');
  ?>

  <script>
    let arrAdd = document.getElementsByClassName("productAdd");

  </script>
    
</body>
</html>