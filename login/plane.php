<?php
include("plane.html");
if(isset($_POST['reg_no'])  && isset($_POST['faa_no']) && isset($_POST['ssn']))
{
    $sname="localhost";
    $password="";
    $db_name="airport";
    $uname="root";
    
     $reg_no=$_POST['reg_no'];
	 $faa_no=$_POST['faa_no'];
	 
	 $ssn=$_POST['ssn'];
    

    

    $conn = mysqli_connect($sname , $uname , $password , $db_name);
    if(!$conn)
    {
        echo "connection failed!";
        exit();
    }
    if(empty($reg_no) ||empty($faa_no)||empty($ssn))
    {
        header("location : plane.php");
		echo "error";
    }
    else{
        $sql="INSERT INTO `plane`(`reg_no`,`faa_no`,`ssn`) VALUES ('$reg_no','$faa_no','$ssn')";
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
    header("LOCATION: plane.php");
}
 ?>
