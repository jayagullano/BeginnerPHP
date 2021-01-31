<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php  

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/
            
        $connection = mysqli_connect('localhost', 'root', 'root', 'numbers', '3307');
        
        if(!$connection){
            die("<br>Connection Failed.<br>");
        }
        
        $result = mysqli_query($connection, "SELECT * from ints");
        
        if(!$result){
            die("<br>Query failed.<br>");
        }
        
        while($row = mysqli_fetch_assoc($result)){
            print_r($row);
            echo "<br>";
        }
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
