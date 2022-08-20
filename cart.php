<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="P_Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Nancu Petrica</title>
</head>

<body>
    <section class="section_cart">
        <header>
          <img class="img_logo" src='./proj/tennis.png'>
          <img style=" height: 6vh;" src='./proj/ball2.png'>
          <h2 class="logo"></h2>
            <nav>
                <a href="home.php?usr_name=<?php echo $_GET['usr_name'];?>"><b>Home</b></a>
                <a href="#cart" class="active"><b>Cart</b></a>
                <a href="#footerr"><b>Contact</b></a>
                <?php if(isset($_GET['usr_name']) && $_GET['usr_name']!="") { ?>
                <a href="home.php?usr_name=<?php echo $_GET['usr_name'];?>"><b><?=$_GET['usr_name']?></b?</a> <?php } ?>
                <a href="home_default.php"><b>Sign out</b></a>

            </nav>
        </header>
    </section>
 
   
    <section class="sec_background">
        <div class="container_cart">
          <section id="cart"> 

              <!-- <article class="product">
                <header>
                    <a class="remove">
                      <img src="https://i.ytimg.com/vi/9TBTPf_TiPk/maxresdefault.jpg" alt="">
                      <h3 >Remove product</h3>
                    </a>
                  </header>
        
                <div class="content">
                  <h1>Racheta Tenis</h1>
                </div>
                <footer class="content">
                  <span class="qt-minus">-</span>
                  <span class="qt">2</span>
                  <span class="qt-plus">+</span>
        
                  <h2 class="full-price"> 299.98</h2>
                  <h2 class="price"> 149.99</h2>
                </footer>
              </article> -->

              <?php
            $connection = mysqli_connect('localhost', 'root', '', 'proiect');
            $table_cart = "cart_" .$_GET['usr_name'];
            $sql1 ="SELECT Nume, Pret, Img, Categorie, cantitate FROM  $table_cart 
                    inner join produse
                    on produse.ID=" .$table_cart. ".cod_prod ";

            $result1 = mysqli_query($connection, $sql1);
            if(mysqli_num_rows($result1) > 0){
                while ($row1 = mysqli_fetch_assoc($result1)) {
                  echo '<article class="product">';
                    echo '<header>';
                     echo '<a class="remove">';
                      echo '<img class="img_cart" src="images/' .$row1["Img"] . '" alt="">';
                      echo '<h3 >Remove product</h3>';
                     echo '</a>';
                    echo '</header>';

                  echo '<div class="content">';
                    echo '<h1>' .$row1["Nume"]. '</h1>';
                    echo 'With the Pro Staff RF97 Autograph v13 Wilson updates Roger Federers  racket with a new cosmetic but keeps everything else the same, including the magical target specs and sublime feel that Roger Federer helped engineer with the original red/black version.';
                  echo '</div>';
                  
                  echo '<footer class="content">';
                  echo '<span class="qt-minus">-</span>';
                  echo '<span class="qt">' .$row1["cantitate"]. '</span>';
                  echo '<span class="qt-plus">+</span>';
                  $price_full = $row1["Pret"] *  $row1["cantitate"];
                  echo '<h2 class="full-price">' .$price_full. '</h2>';
                  echo ' <h2 class="price"> ' .$row1["Pret"]. '</h2>';
                  echo '</footer>';
                  echo '</article>';
                        
                }
            }
            else{
              echo '<h1 style="text-align: center;" >Your cart is empty !</h1>';
            }
               
        ?>     
              
              <footer id="site-footer">
                <div class="container_cart clearfix">

                <?php
            $connection = mysqli_connect('localhost', 'root', '', 'proiect');
            $table_cart = "cart_" .$_GET['usr_name'];
            $sql1 ="SELECT SUM(Pret*cantitate) as Total FROM  $table_cart
                    inner join produse
                    on produse.ID=" .$table_cart. ".cod_prod ";

            $result1 = mysqli_query($connection, $sql1);
            if(mysqli_num_rows($result1) > 0){
              while ($row = mysqli_fetch_assoc($result1)) {

              echo '<div class="left">';
              echo '<h2 class="subtotal">Subtotal: <span>' .$row["Total"]. '</span></h2>';
              echo '<h3 class="shipping">Shipping: <span>25.00</span></h3>';
              echo '</div>';
              echo '<div class="right">';
              $totalpr=$row["Total"] + 25;
              echo '<h1 class="total">Total: <span>' .$totalpr. '</span></h1>';
              echo '<a class="btn">Checkout</a>';
              echo '</div>';
              }
            }
            else{
              echo '<h1 style="text-align: center;" >Your cart is empty !</h1>';
            }
               
        ?>
                  <!-- <div class="left">
                    <h2 class="subtotal">Subtotal: <span>163.96</span></h2>
                    <h3 class="shipping">Shipping: <span>5.00</span></h3>
                  </div>
                  <div class="right">
                    <h1 class="total">Total: <span>177.16</span></h1>
                    <a class="btn">Checkout</a>
                  </div> -->

                </div>
              </footer>

            </section>
          </div>
    </section>

    <footer id="footerr" class="footer">
        <div class="container_footer">
            <div class="footer_row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online shop</h4>
                    <ul>
                        <li><a href="#">watch</a></li>
                        <li><a href="#">bag</a></li>
                        <li><a href="#">shoes</a></li>
                        <li><a href="#">dress</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
   </footer>

   
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="home_script.js"></script>
</body>

</html>