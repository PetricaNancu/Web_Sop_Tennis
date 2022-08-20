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
                <a href="#" class="active"  ><b>Prod</b></a>
                <a href="admin_add.php"  ><b>Add Prod</b></a>
                <a href="admin_utiliz.php"  ><b>Users</b></a>
                <a href="#"  ><b>Comenzi</b></a>
                <a href="home_default.php"><b>Sign out</b></a>

            </nav>
        </header>
    </section>

    <section class="sec_background">
        <div class="container_select">

            <table  class="table_util">
                <thead >
                    <th >ID</th> 
                    <th >Nume</th> 
                    <th >Imagine</th> 
                    <th >Pret</th> 
                    <th >Stoc</th> 
                    <th >Categorie</th> 
                    <th >Remove</th>
                </thead>
                <?php
                $connection = mysqli_connect('localhost', 'root', '', 'proiect');
                $sql = "SELECT ID, Nume, Img, Pret, Stoc, Categorie  FROM produse";
                $result = mysqli_query($connection, $sql);
                if(mysqli_num_rows($result) > 0){

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td>'. $row['ID'] .'</td>';
                        echo '<td>'. $row['Nume'] .'</td>';
                        echo '<td><img class="img_tabel" src="images/'. $row['Img'] .'"/></td>';
                        echo '<td>'. $row['Pret'] .'</td>';
                        echo '<td>'. $row['Stoc'] .'</td>';
                        echo '<td>'. $row['Categorie'] .'</td>';
                        echo '<td><a class="button_remove" href="upload_img.php?ID=' . $row["ID"] .'">-</a></td>';
                        echo '</tr>';
                    }
                }
            ?>
            </table>
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