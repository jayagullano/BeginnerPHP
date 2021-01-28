<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		

<?php



		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:
        
        Step 2: Add the two variables and display the sum with echo:

        Step3: Make 2 Arrays with the same values, one regular and the other associative
        */

        //Step 1:
        $number1 = 10;
        $number2 = 20;
            
        //Step 2:
        echo "$number1 + $number2 = " . ($number1 + $number2);
		
        //Step 3:
        $arr1 = [10];
        $arr2 = ['0' => 10];
            
        echo "<br><br>";
            
        print_r($arr1);
            
        echo "<br>";
        print_r($arr2);


		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>