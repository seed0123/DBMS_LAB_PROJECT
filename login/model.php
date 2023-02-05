<?php
include("model.html");
if(isset($_POST['model_no']) && isset($_POST['capacity']) && isset($_POST['weight']) && isset($_POST['reg_no']))
{
    $sname="localhost";
    $password="";
    $db_name="airport";
    $uname="root";
    $model_no=$_POST['model_no'];
    $capacity=$_POST['capacity'];
    $weight=$_POST['weight'];
	$reg_no=$_POST['reg_no'];
	
	

    

    $conn = mysqli_connect($sname , $uname , $password , $db_name);
    if(!$conn)
    {
        echo "connection failed!";
        exit();
    }
    if(empty($model_no) || empty($capacity) || empty($weight) || empty($reg_no))
    {
        header("location : model.php");
    }
    else{
        $sql="INSERT INTO `model`(`model_no` ,`capacity`, `weight`,`reg_no`) VALUES ('$model_no','$capacity','$weight','$reg_no')";
		
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
    header("LOCATION: model.php");
}
 ?>

