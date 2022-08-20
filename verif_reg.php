<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$user_data = 'uname='. $uname. '&name='. $name;


	$servername="localhost";
	$username="root";
	$password="";
	$dbname="proiect";
	
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	
	if(!$conn){
		die("Eroare la conectare: " .mysqli_connect_error());
		header("Location: register.php");
		exit();
	}else
	{
		if (empty($uname)) {
			header("Location: register.php?error=User Name is required&$user_data");
			exit();
		}else if(empty($pass)){
			header("Location: register.php?error=Password is required&$user_data");
			exit();
		}
		else if(empty($re_pass)){
			header("Location: register.php?error=Re Password is required&$user_data");
			exit();
		}
	
		else if(empty($name)){
			header("Location: register.php?error=Name is required&$user_data");
			exit();
		}
	
		else if($pass !== $re_pass){
			header("Location: register.php?error=The confirmation password  does not match&$user_data");
			exit();
		}
	
		else{
	
			//hashing the password
		    $pass = md5($pass);
	
			$sql = "SELECT * FROM utilizatori WHERE username='$uname' ";
			$result = mysqli_query($conn, $sql);
	
			if (mysqli_num_rows($result) > 0) {
				header("Location: register.php?error=The username is taken try another&$user_data");
				exit();
			}else {
			   $sql2 = "INSERT INTO `utilizatori`( `Username`, `Nume_prenume`, `Parola`) VALUES('$uname','$name', '$pass' )";
			   $result2 = mysqli_query($conn, $sql2);
			   $table_name="CART_" . $uname;
			   $sql3 = "CREATE TABLE $table_name (
					id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
					cod_prod INT(6) NOT NULL,
					cantitate INT(6) NOT NULL,
					FOREIGN KEY (cod_prod) REFERENCES produse(ID)) ENGINE=INNODB";
			   if ($result2 && mysqli_query($conn, $sql3)) 
			   { 
					header("Location: login.php?success=Your account has been created successfully");
				 exit();
			   }else {
					   header("Location: register.php?error=unknown error occurred&$user_data");
					exit();
			   }
			}
			header("Location: home_default.php");
			exit();
		}
	}

	
	
}else{
	header("Location: register.php");
	exit();
}