<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="P_Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Shop</title>
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
                <a href="cart.php?usr_name=<?php echo $_GET['usr_name'];?>"><b>Cart</b></a>
                <?php if(isset($_GET['usr_name']) && $_GET['usr_name']!="") { ?>
                <a href="#"><b><?=$_GET['usr_name']?></b?</a> <?php } ?>
                <a href="home_default.php"><b>Sign out</b></a>

            </nav>
        </header>
    </section>

    <section id="shop" class="sec_background">
        <br>
        <!-- <div  class="container_tabel">
                <br>
            <div class="element">
                <h1>G-360 Extreme </h1>
                <img src="https://www.myblog.ro/wp-content/uploads/2017/07/Cea-mai-bun%C4%83-rachet%C4%83-de-tenis-de-c%C3%A2mp-e1499264025863-1280x720.jpg" class="img_tabel">
                <br>
                <p class="price">$19.99</p>
                <button >Add to cart</button>
            </div>
        </div> -->

        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
        <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
        <br>
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
                            echo '<br>';
                            echo '<img class="img_tabel" src="images/'. $row2['Img'] .'"/>';
                            echo '<br>';
                            echo '<p class="price">' .$row2['Pret'] . ' $' .'</p>';
                            echo '<a class="button_add" href="add_to_cart.php?ID=' . $row2["ID"] .'&amp;username=' . $_GET['usr_name'] . '">Add to cart</a>';
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