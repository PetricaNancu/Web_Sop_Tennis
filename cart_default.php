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
                <a href="#"  ><b>Home</b></a>
                <a href="home_default.php"><b>Shop</b></a>
                <a href="#cart" class="active"><b>Cart</b></a>
                <a href="#footerr"><b>Contact</b></a>
                <a href="register.php"><b>Register</b></a>
                <a href="#" onclick="document.getElementById('login_id').style.display='block'" style="width:auto;"><b>Login</b></a>

            </nav>
        </header>
    </section>

    <div id="login_id" class="loggin_modal">

      <form class="loggin_modal-content animate_loggin" action="aft_login.php" method="post">
          <div class="x_login">
              <span onclick="document.getElementById('login_id').style.display='none'" class="close"
                  title="Close Modal">&times;</span>
          </div>
          <div class="container_loggin">
              <label for="uname"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="password" required>
              <button class="button_logg" type="submit">Login</button>
          </div>
      </form>
  </div> 
   
    <section class="sec_background">
        <div class="container_cart">

            <section id="cart"> 
              <br>
              <h1 style="text-align: center;" >You must Login First !</h1>
            
              <footer id="site-footer">

                <div class="container_cart clearfix">
            
                  <div class="left">
                    <h2 class="subtotal">Subtotal: <span>0.00</span></h2>
                    <h3 class="shipping">Shipping: <span>0.00</span></h3>
                  </div>
            
                  <div class="right">
                    <h1 class="total">Total: <span>0.00</span></h1>
                    <a class="btn">Checkout</a>
                  </div>
            
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