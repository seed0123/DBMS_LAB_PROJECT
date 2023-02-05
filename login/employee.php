<?php
include("employee.html");
if(isset($_POST['ssn']) && isset ($_POST['u_num']))
{
    $sname="localhost";
    $password="";
    $db_name="airport";
    $uname="root";
    
    $ssn=$_POST['ssn'];
	$u_num=$_POST['u_num'];
    

    

    $conn = mysqli_connect($sname , $uname , $password , $db_name);
    if(!$conn)
    {
        echo "connection failed!";
        exit();
    }
    if(empty($ssn) || empty($u_num))
    {
        header("location : employee.php");
		echo "error";
    }
    else{
        $sql="INSERT INTO `employee`(`ssn`,`u_num`) VALUES ('$ssn','$u_num')";
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
    header("LOCATION: employee.php");
}
 ?>
