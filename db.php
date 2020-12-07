<?php
//Step1 : Decleared Variable
$db = new Mysqli; #line no 3 tells the db varaible name
$servername = "localhost";
$database= "riotu website";
$username= "root";
$password ="";
//Step 2: Make a Connection
$db->connect($servername, $username,$password,$database);

//Step 3: Check for Success
if($db){
    echo "Welcome from db.php file";
}else{
    echo "conneciton error";
}
?>