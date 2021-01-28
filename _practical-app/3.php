<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP

	Step 2: Make a forloop  that displays 10 numbers

	Step 3 : Make a switch Statement that test against one condition with 5 cases
 */
    
    
    //Step 1
    
    echo "Step 1: <br>";
    $love = 3;
    
    if($love == 1){
        echo "I love Java";
    } elseif($love == 2){
        echo "I love C++";
    } else {
        echo "I love PHP";
    }
    
    //Step 2
    echo "<br><br>Step 2: <br>";
    
    for($x = 1; $x <= 10; $x++){
        echo "$x <br>";
    }
    
    //Step 3
    echo "<br>Step 3: <br>";
    
    switch ($love){
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
        default:
            echo "Default";
            break;
    }

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>