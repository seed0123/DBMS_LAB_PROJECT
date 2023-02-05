<?php
include("tech_phn.html");
if(isset($_POST['phnno1']) && isset ($_POST['phnno2']) && isset ($_POST['ssn']))
{
    $sname="localhost";
    $password="";
    $db_name="airport";
    $uname="root";
    
    $ssn=$_POST['ssn'];
	$phnno1=$_POST['phnno1'];
	$phnno2=$_POST['phnno2'];
    

    

    $conn = mysqli_connect($sname , $uname , $password , $db_name);
    if(!$conn)
    {
        echo "connection failed!";
        exit();
    }
    if(empty($ssn) || empty($phnno1)|| empty($phnno2))
    {
        header("location :tech_phn.php");
		echo "error";
    }
    else{
        $sql="INSERT INTO `tech_phn`(`ssn`,`phnno1`,`phnno2`) VALUES ('$ssn','$phnno1','$phnno2')";
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
    header("LOCATION: tech_phn.php");
}
 ?>
