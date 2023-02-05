<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display the Tables</title>
    <link rel="#" href="">
</head>
    <div class="container">
        <h3> AIRPORT  DATABASE SYSTEM</h3>

        
    </div>
    <body style="margin: 50px;">
    <div class="sub">
       
        <h1>Displaying Details of Model</h1>
    </div>
    <div class="refer">

        <a href="employeesearch.html">Back</a>
    </div>
    
    <div class="nat">

        <a href="index.html">Back to home</a>
    </div>
    
    <br>
    <table class="table" align="center" border="1px" style="width:600px; line-height:30px;">
        <thead>
            <tr>
                <th>UNION_NUM</th>
                <th>SSN</th>
                <th>NAME</th>
                <th>STREET</th>
                <th>AREA</th>
                <th>SALARY</th>
                <th>DOORNO</th>
                <!-- <th>REG NUMBER</th>
                <th>SSN</th> -->
                <!-- <th>CREDITS</th>
                <th>SEM ID</th>
                <th>GROUP ID</th>
                <th>GROUP NAME</th> -->
                
                
            </tr>
        </thead>
            <tbody>
                <?php
                
                
                if(isset($_POST['u_num'])){
                $server = "localhost";
                $username = "root";
                $password = "";
                $u_num=$_POST['u_num'];

            
                // Create a database connection
                $con = mysqli_connect($server, $username, $password);
            
                // Check for connection success
                if(!$con){
                  
                    die("connection to this database failed due to" . mysqli_connect_error());
                }
                
                $check =  "select * from `airport`.`employee` where u_num='$u_num'";
                $result= $con->query($check);
                
                
                
                if(mysqli_num_rows($result)>0){
        
                $sql1="SELECT * FROM `airport`.`employee` where u_num='$u_num'";
                $result1= $con->query($sql1);
                $sql2="SELECT * FROM `airport`.`employee` ,`airport`.`technician` where employee.u_num='$u_num' && employee.ssn=technician.ssn";
                $result2= $con->query($sql2);
                $sql3="SELECT * FROM `airport`.`employee` ,`airport`.`traffic_control` where employee.u_num='$u_num' && employee.ssn=traffic_control.ssn";
                $result3= $con->query($sql2);

                // $sql3="SELECT * FROM `database`.`professorgroup` where SSN='$SSN'";
                // $result3= $con->query($sql3);
                // $sql4="SELECT * FROM `database`.`course`,`database`.`professorcourse`where professorcourse.SSN='$SSN' && professorcourse.courseid=course.courseid";
                // $result4= $con->query($sql4);
                // $sql5="SELECT * FROM `database`.`group`,`database`.`professorgroup`where professorgroup.SSN='$SSN' && professorgroup.groupid=group.groupid";
                // $result5= $con->query($sql5);



                if(!$result1)
                {
                    die("Invalid Query...".$con->error);
                }
                if(!$result2)
                {
                    die("Invalid Query...".$con->error);
                }
                // if(!$result3)
                // {
                //     die("Invalid Query...".$con->error);
                // }
                // if(!$result4)
                // {
                //     die("Invalid Query...".$con->error);
                // }
                // if(!$result5)
                // {
                //     die("Invalid Query...".$con->error);
                // }
                while(($row1 = $result1->fetch_assoc()) && ($row2 = $result2->fetch_assoc()) && ($row3 = $result3->fetch_assoc()) )
                {
                    echo"<tr>
                    <td>" . $row1["u_num"]."</td>
                    <td>" . $row1["ssn"]."</td>
                    <td>" . $row2["name"]."</td>
                    <td>" . $row2["street"]."</td>
                    <td>" . $row2["area"]."</td>
                    <td>" . $row2["salary"]."</td>
                    <td>" . $row2["doorno"]."</td>
                    
                    </tr>";
                }
            }
            else{
                echo"PLEASE ENTER VALID DETAILS!";
            }
        
        
        }
        
            
    
            
        
                
                ?>
            </tbody>
    </table>
</body>
</html>
<style>
    body {
    background: url('./img8.jpg') no-repeat;
    background-size:cover;
    color:#000;
}
.container{
    text-align:center;
    font-size:40px;
}
.refer{
    font-size:25px;
    align-self: center;
    width: 50px;
    font-weight: bold;
    margin: 20px 0;
    padding:10px 15px;
    width:5%;
    border:0;
    border-radius:30px;
    background-color:#fff;
    cursor:pointer;
}
.sub {
    text-align:center;
    

}
.nat {
    font-size:25px;
    align-self: center;
    width: 50px;
    font-weight: bold;
    margin: 20px 0;
    padding:10px 50px;
    width:13%;
    border:0;
    border-radius:30px;
    background-color:#fff;
    cursor:pointer;
}

</style>