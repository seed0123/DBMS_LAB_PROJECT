<?php
include("test_info.html");
if(isset($_POST['hours']) && isset($_POST['date'])&&isset($_POST['reg_no']) && isset($_POST['faa_no'])&&isset($_POST['ssn']) && isset($_POST['score']))
{
    $sname="localhost";
    $password="";
    $db_name="airport";
    $uname="root";
    $hours=$_POST['hours'];
    $date=$_POST['date'];
	$reg_no=$_POST['reg_no'];
    $faa_no=$_POST['faa_no'];
	$ssn=$_POST['ssn'];
    $score=$_POST['score'];
   
    

    

    $conn = mysqli_connect($sname , $uname , $password , $db_name);
    if(!$conn)
    {
        echo "connection failed!";
        exit();
    }
    if(empty($hours) || empty($date)||empty($reg_no) || empty($ssn)|| empty($faa_no) || empty($score) )
    {
        header("location : test_info.php");
    }
    else{
        $sql="INSERT INTO `test_info`(`hours` ,`date`,`reg_no`,`faa_no`,`ssn`,`score` ) VALUES ('$hours','$date','$reg_no','$faa_no','$ssn','$score')";
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
    header("LOCATION: test_info.php");
}
 ?>
