<?php
include("test.html");
if(isset($_POST['name']) && isset($_POST['faa_no']) && isset($_POST['score']))
{
    $sname="localhost";
    $password="";
    $db_name="airport";
    $uname="root";
    $name=$_POST['name'];
    $faa_no=$_POST['faa_no'];
    $score=$_POST['score'];
    
    

    

    $conn = mysqli_connect($sname , $uname , $password , $db_name);
    if(!$conn)
    {
        echo "connection failed!";
        exit();
    }
    if(empty($name) || empty($faa_no) || empty($score))
    {
        header("location : test.php");
    }
    else{
        $sql="INSERT INTO `test`(`name` ,`faa_no`, `score` ) VALUES ('$name','$faa_no','$score')";
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
    header("LOCATION: test.php");
}
 ?>
