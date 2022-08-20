<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style_reg.css?t=<?php echo round(microtime(true)*1000);?>">
</head>
<body>

     <form action="aft_login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Username</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="register.php" class="ca">Create an account</a>
     </form>
	 <br>
     <form class="home">
         <input type="button" class="butt_home" onclick="window.location.href = 'home_default.php';" value="Home"/>
      </form>

</body>
</html>