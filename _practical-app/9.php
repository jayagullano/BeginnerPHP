<?php include "functions.php"; ?>
<?php include "includes/header.php";?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
	
	<?php 

	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
	
	?>
    
    <!-- Step 1 -->

    <a href="9.php?id=100">Click HERE</a>
    <h1><?php print_r($_GET)?></h1>
    
    <!-- Step 2 -->
    
    <?php setCookie('CookieMonster', 'Hey', time() + (60*60*24*7)) ?>
    
    <!-- Step 3 -->
    
    <?php session_start(); 
    
        $_SESSION['Hey'] = 10;
        
        if(isset($_SESSION['Hey'])){
            echo $_SESSION['Hey'];    
        }
        
    ?>



</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>