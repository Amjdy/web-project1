<?php
// first thing is before start of page add this line
session_start();
$valid = $_SESSION["validUser"]; 
//including the database connection file
include_once("conn.php");

   if( isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] += 1;
   }else {
      $_SESSION['counter'] = 1;
   }
	
   $msg = "You have visited this page ".  $_SESSION['counter'];
   $msg .= "in this session."; // this is concatenation 
 
//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM myinfo ORDER BY id DESC"); // using mysqli_query instead
?>

<html>

<head>
    <title>Our Third P TRY</title>
</head>

<body>
    <a href="addmyinfo.html">Add More Information</a><br /><br/>
    <?php
    if($valid){
   echo "<table width='80%' border=0>";
   echo     "<tr bgcolor='#FFCCCC'>";
echo            "<td>First Name</td>";
    echo        "<td>Second Name</td>";
        echo    "<td>Email</td>";
            echo "<td>Opt</td>";
   echo     "</tr>";

        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['firstname']."</td>";
            echo "<td><font color='red'>".$res['lastname']."</font></td>";
            echo "<td><font color='orange'>".$res['email']."</font></td>"; 

            echo "<td><a href=\"editinfo.php?id=$res[id]\">Edit</a> | <a href=\"deleteinfo.php?id=$res[id]\" onClick=\"return confirm('Do you want to delete?')\">Delete</a></td>";        
        }
        }
        
        else{
            echo "<table width='80%' border=0>";
   echo     "<tr bgcolor='#FFCCCC'>";
echo            "<td>First Name</td>";
    echo        "<td>Second Name</td>";
        echo    "<td>Email</td>";
           
   echo     "</tr>";
        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['firstname']."</td>";
            echo "<td><font color='red'>".$res['lastname']."</font></td>";
            echo "<td><font color='orange'>".$res['email']."</font></td>";    
            if ($_SESSION["iid"]==$res['id']) {
                     echo "<td><a href=\"editinfo.php?id=$res[id]\">Edit</a> | <a href=\"deleteinfo.php?id=$res[id]\" onClick=\"return confirm('Do you want to delete?')\">Delete</a></td>";  
                   }       
        }
    }
       

   echo  "</table>";
 ?>
    <?php
    echo "<h1>I am coming from Session Varaible</h1>";
    echo "Your First Name is  " . $_SESSION["fn"] . ".<br>";
    echo "Your Last Name is  " . $_SESSION["ln"] . ".<br>";
    echo "Your Email is  " . $_SESSION["em"] . ".<br>";

    echo $msg;
    ?>










</body>

</html>
