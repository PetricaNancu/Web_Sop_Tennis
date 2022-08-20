<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);


	$servername="localhost";
	$usr_nm_sql="root";
	$sql_pass="";
	$dbname="proiect";
	
	$conn=mysqli_connect($servername,$usr_nm_sql,$sql_pass,$dbname);
	
	if(!$conn){
		die("Eroare la conectare: " .mysqli_connect_error());
		header("Location: register.php");
		exit();
	}else
	{

		if (empty($uname)) {
			header("Location: login.php?error=User Name is required");
			exit();
		}else if(empty($pass)){
			header("Location: login.php?error=Password is required");
			exit();
		}
		else{
			// hashing the password
			$pass = md5($pass);

			
			$sql = "SELECT * FROM utilizatori WHERE Username='$uname' AND Parola='$pass'";

			$result = mysqli_query($conn, $sql);
			$admin_usr="Admin";
			$admin_pass="admin";

			if (mysqli_num_rows($result) === 1) {
				$row = mysqli_fetch_assoc($result);

				if($row['Username'] === $admin_usr && $row['Parola'] === $pass)
				{
					header("Location: admin.php");
					exit();
				}
			    else if ($row['Username'] === $uname && $row['Parola'] === $pass)
				{
			    	$_SESSION['username'] = $row['Username'];
			    	//$_SESSION['name'] = $row['name'];
			    	//$_SESSION['id'] = $row['id'];
					header("Location: home.php?usr_name=".$row['Username']);
					exit();
			    }
				else{
					header("Location: login.php?error=Incorect User name or password");
			        exit();
				}
			}else{
				header("Location: login.php?error=Incorect User name or password");
			    exit();
			}
		}
	}

	
} 
else{
	header("Location: login.php");
	exit();
	}
