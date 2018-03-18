<?php session_start();
$dbc = mysqli_connect('localhost','root','','sayt_base');
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
	<div class="myprof">
		<div class="myprof_img"><img src="img/profil.png" alt="nkar"></div><br>
		<h2><?php echo $_SESSION['username']; ?></h2>
		<button><a href="functions/exit.php">Sign Out</a></button>
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