<?php
include("model_tech.HTML");
if(isset($_POST['ssn']) && isset ($_POST['model_no']))
{
    $sname="localhost";
    $password="";
    $db_name="airport";
    $uname="root";
    
    $ssn=$_POST['ssn'];
	$model_no=$_POST['model_no'];
    

    

    $conn = mysqli_connect($sname , $uname , $password , $db_name);
    if(!$conn)
    {
        echo "connection failed!";
        exit();
    }
    if(empty($ssn) || empty($model_no))
    {
        header("location : model_tech.php");
		echo "error";
    }
    else{
        $sql="INSERT INTO `model_tech`(`ssn`,`model_no`) VALUES ('$ssn','$model_no')";
        try{
		$res=mysqli_query($conn,$sql);
		}
		catch (EXCEPTION $e)
		{
			echo "PLEASE ENTER THE CORRECT DETAILS";
			EXIT();
		}
        if($res)
        {
            echo "YOUR DETAILS ENTERED SUCCESSFULLY!";
        }
        else{
        echo "YOUR MESSAGE COULD NOT BE SENT !";
    }
    }
}
else
{
    header("LOCATION: model_tech.php");
}
 ?>
