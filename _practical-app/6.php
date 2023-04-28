
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

	<?php  

/*  Step1: Make a form that submits one value to POST super global
*/
	
?>

<form action="form_ex.php" method="post">
	<input type="text" name="value" placeholder="Enter a value">	
</form>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>