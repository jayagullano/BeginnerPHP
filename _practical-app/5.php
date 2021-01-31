<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


    /*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

    */
    
    //Step 1:
    echo sqrt(123231) . "<br>";

    //Step 2:
    echo strlen("_____") . "<br>";
    
    //Step 3:
    $arr = [1,2,3];
    echo array_sum($arr);
	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>