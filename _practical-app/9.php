<?php include "functions.php" ?>
<?php include "includes/header.php" ?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
		<a href="9.php?id=10">Click here</a>
	
	<?php 

	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/

	print_r($_GET);

	$name = "Bob";
	$value = 11;
	$expiration = time() + (60 * 60 * 24 * 7);

	setcookie($name, $value, $expiration);

	session_start();

	$_SESSION["hello"] = "Helllooo";

	echo $_SESSION["hello"];
	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>