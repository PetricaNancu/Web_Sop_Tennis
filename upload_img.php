<?php
$cn=mysqli_connect("localhost","root","","proiect") ;
if (isset($_POST['upload'])) {
    // Get image name
    
    // Get text
   // $image_text = mysqli_real_escape_string($db, $_POST['image_text']);

    // image file directory
    

    $name = $_POST['nume'];
	$price = $_POST['pret'];
    $image = $_FILES['image']['name'];
	$category = $_POST['categorie'];
	$stocc = $_POST['stoc'];

    $target = "images/".basename($image);
    $sql = "INSERT INTO `produse`( `Nume`, `Pret`, `Img`, `Categorie`, `Stoc`) VALUES ('$name','$price','$image','$category','$stocc')";
    // execute query
    mysqli_query($cn, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
        header("Location: admin.php?success=Your account has been created successfully");
		exit();
    }else{
        $msg = "Failed to upload image";
    }
}
if (isset($_GET["ID"]))
{
    
    $sql = "DELETE FROM produse WHERE ID='" . $_GET["ID"] . "'";
    if (mysqli_query($cn, $sql)) {
        header( "Location: admin.php?success=Your product has been removed successfully");
		exit();
    } else {
        echo "Error deleting record: " . mysqli_error($cn);
    }
    mysqli_close($cn);
}


?>