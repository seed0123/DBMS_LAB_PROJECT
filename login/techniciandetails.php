<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display the Tables</title>
    <link rel="stylesheet" href="techniciandetails.php">
</head>
    <div class="container" align="center";>
        <h3><big>AEROPLANE MANAGEMENT SYSTEM</big></h3>
        <p>Welcome to  Aeroplane Management System....</p>
    </div>
    <body style="margin: 50px;"
			background="img.jpg"; link="#000"; alink="#017bf5"; vlink="#000";>
		</br>
    <h1 align="center">
		<font face="times new roman" color="#000" size="10">
			DISPLAY USER TABLE
		</font>
	</h1>
    <br> 
    <table class="table"  align="center" border="1px" style="width:600px; line-height:30px;">
        <thead>
            <tr>    
                <th colspan="10"><h2>TECHNICIAN DATA</h2>
            </tr>   
            <tr>
                <th>name</th>
                <th>area</th>
                <th>street</th>
				<th>ssn</th>
				<th>salary</th>
				<th>doorno</th>
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
                $sql="SELECT * FROM `airport`.`technician`";
                $result= $con->query($sql);
                if(!$result)
                {
                    die("Invalid Query...".$con->error);
                }
                while($row = $result->fetch_assoc())
                {
                    echo"<tr>
                    <td>" .$row["name"]."</td>
                    <td>" .$row["area"]."</td>
                    <td>" .$row["street"]."</td>
					<td>" .$row["ssn"]."</td>
					<td>" .$row["salary"]."</td>
					<td>" .$row["doorno"]."</td>
                    </tr>";
                }

                
                ?>
            </tbody>
    </table>
</body>
</html>