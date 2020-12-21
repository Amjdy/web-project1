<?php
// including the database connection file
include_once("db.php");
if(isset($_POST['update']))
{	
	$id = mysqli_real_escape_string($db, $_POST['id']);
	
	$usern = mysqli_real_escape_string($db, $_POST['usern']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
		
	
	// checking empty fields
	if(empty($username) || empty($password) || strlen(trim($_POST["password"])) < 6) {	
			
		if(empty($username)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>Password is empty</font><br/>";
		}

		if(strlen(trim($_POST["password"])) < 6){
			echo "<font color='red'>Password length is less than six caracters </font><br/>";
			exit;
		}
				
	} else {	
		$param_password = password_hash(trim($password), PASSWORD_DEFAULT); // Creates a password hash
		//updating the table
		$result = mysqli_query($db, "UPDATE users SET username='$usern',password='$param_password' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is myinof.php
		header("Location: welcome.php");
	}
}
?>
<?php

//getting id from url
$id = $_GET['id'];
//selecting data associated with this particular id
$result = mysqli_query($db, "SELECT * FROM users WHERE id=$id");
while($res = mysqli_fetch_array($result))
{
	$usern = $res['username'];
	$password = $res['password'];
}
?>
<html>
<head>	
	<title>Lets Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="editinfo.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="usern" value="<?php echo $usern;?>"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="text" name="password" value="<?php echo $password;?>"></td>
				

			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>