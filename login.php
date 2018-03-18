<?php
session_start();
$dbc = mysqli_connect('localhost','root','','sayt_base');
if (!isset($_SESSION['user_id'])) {
	if (isset($_POST['submit'])) {
		$user_username = mysqli_real_escape_string($dbc,trim($_POST['username']));
		$user_password = mysqli_real_escape_string($dbc,trim($_POST['password']));
		if (!empty($user_username) && !empty($user_password)) {
			$query = "SELECT `user_id` , `username` FROM `signup` WHERE username = '$user_username' AND password = md5('$user_password')";
			$data = mysqli_query($dbc,$query);
			if (mysqli_num_rows($data)) {
				$_SESSION['username'] = $user_username;	


			}
			else{
				echo "<script>alert('Email or password is incorrect!')</script>";
			
			}

			}

		else{
			echo "<script>alert('Enter Email and Password ')</script>";
		}
	}
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
<div class="clear"></div>
<div class="content">


	<div class="mutq">
		<?php 
if (empty($_SESSION['username'])) {
	
?>
		<form action="<?php echo $_SERVER['PHP_SELf']; ?>" method="POST">
			<input type="email" name="username" placeholder="Email"><br>
			<input type="password" name="password" placeholder="Password"><br>
			<a class="a" href="index.php">If you don't have acount then register here</a>
			<button name="submit" class="sub" type="submit">Log In</button>
		</form>
		<script></script>
	<?php
		}
		else{
			?>
			<div class="proff"><p><a href="myprofile.php">My profile</a></p></div>
			<?php
		}

	?>
	</div>



</div>



<div class="clear"></div>
</div>

<div class="downcontainer">
	
			<div class="video"><a href="#"><img src="img/video.jpg" alt="video"></a></div>

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