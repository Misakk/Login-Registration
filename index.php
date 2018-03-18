<?php $dbc = mysqli_connect('localhost', 'root', '' , 'sayt_base') ;
if (mysqli_connect_errno()) {
    printf("Соединение не удалось: %s\n", mysqli_connect_error());
    exit();
}

?>



<!DOCTYPE html>
<html lang="en">
<head>

<?php  require_once "maser/head.php" ?>

</head>
<body>
<div class="wrapper">
	<div class="background">

	<?php
		require_once "maser/header.php";
	?>

<div class="content">
	<div class="leftside">
		<h1><span class="begin">The easiest way to</span> <br> <span class="finish">create a website</span></h1>
		<p>Free. Powerful. Professional.</p>
	</div>

	<div class="rightside">

	<div class="registration">
		<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST";>
			<p>Full Name</p>
			<input class="sign" type="text" name="name">
			<p>Email</p>
			<input class="sign" type="email" name="username">
			<p>Password</p>
			<input class="sign" type="password" name="password">
			<br>
			<button name="submit" class="submit" type="submit">Sign Up. It's Free!</button>
			<span class="conform">
				<?php 
if (isset($_POST['submit'])) {
	$username = mysqli_real_escape_string($dbc, trim($_POST['username']));
	$name = mysqli_real_escape_string($dbc, trim($_POST['name']));
	$password = mysqli_real_escape_string($dbc, trim($_POST['password']));

	if (!empty($username) && !empty($name) && !empty($password)) {
		$query = "SELECT * FROM `signup` WHERE username = '$username'";
		$data = mysqli_query($dbc,$query);

		if (mysqli_num_rows($data) == 0) {
			$query = "INSERT INTO `signup` (username, password, name) VAlUES ('$username', md5('$password'), '$name')";
			$data = mysqli_query($dbc,$query);
			echo "Now you can Login";
			mysqli_close($dbc);
			

		}else{
			echo "<script>alert('Such Login is Exesting'); </script>";
		}

	}else{
		echo "<script>alert('The Fields are Empty'); </script>";
	}
}

 ?>
			</span>

	
		</form>
	</div>
	
	</div>
</div>


<div class="clear"></div>
</div>

<div class="downcontainer">
	
			<div class="video"><a href="https://www.youtube.com/" target="_blank"><img src="img/video.jpg" alt="video"></a></div>

		<div class="watch"><p>Watch how to <br> create a free website</p>

		</div>

<div class="clear"></div>
</div>


<?php
require_once "maser/footer.php";
?>


	</div>
</body>

</html>