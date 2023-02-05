<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display the Tables</title>
    <link rel="stylesheet" href="employeedisplay.php">
</head>
    <div class="container" align="center";>
        <h3><big>AEROPLANE MANAGEMENT SYSTEM</big></h3>
        <p>Welcome to  Aeroplane Management System....</p>
    </div>
    <body style="margin: 50px;"
			background="img.jpg"; link="#000"; alink="#017bf5"; vlink="#000";>
		</br>
    <h1 align="center">
		<font face="times new roman" color="#000" size="8">
			DISPLAY USER TABLE
		</font>
	</h1>
    <br> 
    <table class="table"  align="center" border="1px" style="width:600px; line-height:20px;">
        <thead>
            <tr>    
                <th colspan="10"><h2>EMPLOYEE DATA</h2>
            </tr>   
            <tr>
               
                <th>u_num</th>
                
				<th>ssn</th>
            </tr>
        </thead><a href="index.html">HOME</a>
            <tbody>
                <?php
                $server = "localhost";
                $username = "root";
                $password = "";
            
                
                $con = mysqli_connect($server, $username, $password);
            
                
                if(!$con){
                    die("connection to this database failed due to" . mysqli_connect_error());
                }
                $sql="SELECT * FROM `airport`.`employee`";
                $result= $con->query($sql);
                if(!$result)
                {
                    die("Invalid Query...".$con->error);
                }
                while($row = $result->fetch_assoc())
                {
                    echo"<tr>
                    <td>" .$row["u_num"]."</td>
                    <td>" .$row["ssn"]."</td>
                    
					
                    </tr>";
                }

                
                ?>
            </tbody>
    </table>
</body>
</html>