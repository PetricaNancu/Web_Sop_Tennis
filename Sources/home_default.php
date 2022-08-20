<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="P_Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Nancu Petrica</title>
</head>

<body>
    <section class="section_shop">
        <header>
            
            <img class="img_logo" src='./proj/tennis.png'>
            <img style=" height: 6vh;" src='./proj/ball2.png'>
            <h2 class="logo"></h2>
            <nav>
                <a href="#"  ><b>Home</b></a>
                <a href="#shop" class="active"><b>Shop</b></a>
                <a href="cart_default.php"><b>Cart</b></a>
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

    <section id="shop" class="sec_background">
        <br><br>
        <?php
            $connection = mysqli_connect('localhost', 'root', '', 'proiect');
            $sql1 = "SELECT distinct Categorie FROM produse ";
            $result1 = mysqli_query($connection, $sql1);
            if(mysqli_num_rows($result1) > 0){
                echo '<div  class="container_tabel">';
                echo ' <br>';
                while ($row1 = mysqli_fetch_assoc($result1)) {
                    $sql2 = "SELECT produse.ID, produse.Nume, produse.Pret, produse.Img  FROM produse WHERE categorie='" .$row1['Categorie'] ."'";
                    $result2 = mysqli_query($connection, $sql2);
                    if(mysqli_num_rows($result2) > 0){

                        while ($row2 = mysqli_fetch_assoc($result2)) {
                            echo '<div class="element">';
        
                                echo '<h1>' .$row2['Nume'] .'</h1>';
                                echo '<img class="img_tabel" src="images/'. $row2['Img'] .'"/>';
                                echo '<br>';
                                echo '<p class="price">' .$row2['Pret'] . ' $' .'</p>';
                                echo '<a class="button_add" href="add_to_cart.php?ID=login">Add to cart</a>';
                    
                            echo '</div>';
                        }
                    }      
                }
                echo '</div>';
            }      
        ?>
       
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
                    <a href="#footerr"><b>Contact</b></a>
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