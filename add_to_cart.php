<?php


if($_GET["ID"]=="login")
{
    header( "Location: login.php?error=You have to login before adding to your cart!");
	exit();
}
else if (isset($_GET["ID"]))
{

    $id=$_GET["ID"];
    $username=$_GET["username"];
    $table_cart="cart_" . $_GET["username"];

    $cn=mysqli_connect("localhost","root","","proiect") ;

    $sql = "INSERT INTO $table_cart ( cod_prod, cantitate ) VALUES ('$id','1')";
    mysqli_query($cn, $sql);
    
    $location='Location: home.php?success=Your item has been added' .'&usr_name=' .$_GET["username"];

    header($location );
    eixt();
    mysqli_close($cn);
}
else 
{
    $username=$_GET["username"];
    $location='Location: home.php?error=unknown error occurred' .'&usr_name=' .$_GET["username"];
    header($location );
    eixt();
}
?>