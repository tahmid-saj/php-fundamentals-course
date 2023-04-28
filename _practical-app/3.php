<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP


	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	if (6 < 5) {
		echo "nope";
	} else if (7 < 5) {
		echo "nope";
	} else {
		echo "I love php" . "<br>";
	}

	for ($i = 0; $i < 10; $i++) {
		echo $i . "<br>";
	}

	$number = 5;
	switch ($number) {
		case 1:
			echo "1";
			break;
		case 2:
			echo "2";
			break;
		case 3:
			echo "3";
			break;
		case 4:
			echo "4";
			break;
		case 5:
			echo "5" . "<br>";
			break;
		default:
			break;
	}
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>