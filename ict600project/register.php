<?php session_start();
include "pagehead.php"
?>
<body>
<div class="flex-container">
<header>
  <h1>Fitness Gym System: Register</h1>
</header>
<?php include "pagenav.php"?>
<article class="article">
<?php
if (isset($_POST['AddUser'])){
	// New Additional Part
    $fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$pnumber = $_POST['pnumber'];
	$dob = $_POST['dob'];
	$address = $_POST['address'];
    
	// Old Part
	$username = $_POST['username'];
	$password = $_POST['password'];
	$role = $_POST['role'];
	$status = $_POST['status'];

	include 'dbconnect.php';

	// SQL query
	$sql = "INSERT INTO app_user 
				(username, password, role, status, fname, lname, email, pnumber, dob, address)
				VALUES
				('$username',PASSWORD('$password'),'$role','$status', '$fname', '$lname', '$email', '$pnumber', '$dob', '$address')";
	// Execute the query (the recordset $rs contains the result)
	if (mysqli_query($conn, $sql)) {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	mysqli_close($conn);
}
?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="all.css">

<form method="post" action="index.php?page=useradd">
    <div class="container1">
        <h1>New Membership Registration</h1>
        <div class="row">
            <div class="col">
                <label>Full Name</label>
                <input type="text" class="form-control" name="fname" value="" required>
            </div>
            <div class="col">
                <label>Last Name</label>
                <input type="text" class="form-control" name="lname" value="" required>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <label>Email</label>
                <input type="text" class="form-control" name="email" value="" required>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <label>Phone Number</label><br>
                <input type="text" class="form-control" name="pnumber" value="" required>
            </div>
            <div class="col">
                <label>Date Of Birth</label>
                <input type="date" class="form-control" name="dob" value="" required>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <label>Address</label>
                <input type="text" class="form-control" name="address" value="">
            </div>
            <div class="w-100"></div>
            <div class="col">
                <label>Username</label><br>
                <input type="text" class="form-control" name="username" value="" required>
            </div>
            <div class="col">
                <label>Password</label>
                <input type="password" class="form-control" name="password" value="" required>
            </div>
            <div class="w-100" style="padding-top: 15px;">
                <div class="alert alert-info" role="alert">
                    Type Of Membership Account
                </div>
            </div>
            <div class="col">
                <label>Role</label>
                <input type="text" class="form-control" name="role" value="normal" readonly>
            </div>
            <div class="col">
                <label>Status</label>
                <input type="text" class="form-control" name="status" value="active" readonly>
            </div>
            <div class="w-100" style="padding-top: 15px;">
                <div class="alert alert-danger" role="alert">
                    Please ensure all information have been entered before submit !
                </div>
            </div>
            <div class="col">
                <div class="d-grid gap-2">
                    <button  type="submit" name="AddUser" value=" OK " class="btn btn-primary" >Sign Up Membership</button>
                </div>
            </div>
        </div>
    </div>
</form>
</article>
 <?php include "pagefoot.php"?>