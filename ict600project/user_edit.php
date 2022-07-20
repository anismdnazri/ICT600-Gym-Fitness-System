<?php 
session_start();
$currentPage = 'user_edit2.php';
include "pagehead.php";

if (isset($_GET['fname'])) {
	$fname = $_GET['fname'];
	// Cre ate connection
	include 'dbconnect.php';

	$username = $_SESSION['username'];

	$query = "SELECT username, role, status, fname, lname, email, pnumber, dob, address 
	FROM app_user 
	WHERE username = '$username'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result);
?>	

<body>

<div class="flex-container">
<header>
  <h1>Update Fitness Gym</h1>
</header>
<?php include "pagenav.php"?>
<article class="article">

<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
Firstname
<br><input type="text" name="fname" value="<?php echo $row['fname']?>" ><br><br>
Lastname
<br><input type="text" name="lname" value="<?php echo $row['lname']?>" ><br><br>
Password
<br><input type="password" name="password" value="<?php echo $row['password']?>" ><br><br>
Phone Number
<br><input type="text" name="pnumber" value="<?php echo $row['pnumber']?>" ><br><br>
Address
<br><input type="text" name="address" value="<?php echo $row['address']?>" ><br><br>
Email
<br><input type="text" name="email" value="<?php echo $row['email']?>" ><br><br>
Username
<br><input type="text" name="username" value="<?php echo $row['username']?>" ><br><br>
Date of Birth
<br><input type="date" name="dob" value="<?php echo $row['dob']?>" ><br><br>

<input type="submit" name="EditUser" value=" Update "><br>
</form>
</article>

<?php
}
?>
<?php
if (isset($_POST['EditUser'])){
	if ($_POST['fname'] != '' && $_POST['lname'] != '' && $_POST['password'] != '' && $_POST['pnumber'] != ''&& $_POST['address'] != '' && $_POST['email'] != ''&& $_POST['username'] != ''&& $_POST['dob'] != '') {
		
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$password = $_POST['password'];
		$pnumber = $_POST['pnumber'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$dob = $_POST['dob'];	

	include 'dbconnect.php';

	// SQL query

	$query = "UPDATE app_user SET
			`lname` = '$lname', 
			`password` = '$password',
			`pnumber` = '$pnumber',
			`address` = '$address',
			`email` = '$email',
			`username` = '$username',
			`dob` = '$dob'
			WHERE
			`fname` = '$fname'";
					
	$result = mysqli_query($conn, $query);
		if ($result) {
			
			echo '<script type="text/javascript">';
            echo 'window.alert("Record updated successfully");';
            echo 'location.replace("profile_view.php");';
            echo '</script>';

		} else {
			echo "Fail update data " . mysqli_error($conn);
		}
	} else {
		echo "Please enter all required data.";
	}
	
}
		
?>

<?php include "pagefoot.php"?>