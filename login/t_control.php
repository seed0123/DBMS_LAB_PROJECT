<?php
include("t_control.html");
if(isset($_POST['date']) && isset($_POST['ssn']))
{
    $sname="localhost";
    $password="";
    $db_name="airport";
    $uname="root";
    $ssn=$_POST['ssn'];
	$date=$_POST['date'];
	
	

    

    $conn = mysqli_connect($sname , $uname , $password , $db_name);
    if(!$conn)
    {
        echo "connection failed!";
        exit();
    }
    if(empty($ssn) || empty($date))
    {
        header("location : t_control.php");
    }
    else{
        $sql="INSERT INTO `traffic_control`(`ssn` ,`date`) VALUES ('$ssn','$date')";
		
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
    header("LOCATION: t_control.php");
}
 ?>

