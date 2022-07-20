<?php
if (isset($_POST['AddUser'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$pnumber = $_POST['pnumber'];
	$dob = $_POST['dob'];
	$address = $_POST['address'];
	// New Additional Part
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
		header("Location: index.php?page=userview");
		die();
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	
	mysqli_close($conn);
}
?>

<h1>Add New User</h1>
<form method="post" action="index.php?page=useradd">
Username
<input type="text" name="username" value=""></br>
Password
<input type="password" name="password" value=""></br>
Role
<input type="text" name="role" value=""></br>
Status
<input type="text" name="status" value=""></br>
</br>
<input type="submit" name="AddUser" value=" OK "></br>
</form>

<form method="post" action="index.php?page=useradd">
  <div class="containerAddUser">
	<div class="row mb-3">
		<label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
		<div class="col-sm-10">
		<input type="email" class="form-control" id="inputEmail3">
		</div>
	</div>
	<div class="row mb-3">
		<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
		<div class="col-sm-10">
		<input type="password" class="form-control" id="inputPassword3">
		</div>
	</div>
	<div class="row mb-3">
		<label for="inputPassword3" class="col-sm-2 col-form-label">Role</label>
		<div class="col-sm-10">
		<input type="password" class="form-control" id="inputPassword3">
		</div>
	</div>
	<div class="row mb-3">
		<label for="inputPassword3" class="col-sm-2 col-form-label">Status</label>
		<div class="col-sm-10">
		<input type="password" class="form-control" id="inputPassword3">
		</div>
	</div>
	<fieldset class="row mb-3">
		<legend class="col-form-label col-sm-2 pt-0">Radios</legend>
		<div class="col-sm-10">
		<div class="form-check">
			<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
			<label class="form-check-label" for="gridRadios1">
			First radio
			</label>
		</div>
		<div class="form-check">
			<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
			<label class="form-check-label" for="gridRadios2">
			Second radio
			</label>
		</div>
		<div class="form-check disabled">
			<input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
			<label class="form-check-label" for="gridRadios3">
			Third disabled radio
			</label>
		</div>
		</div>
	</fieldset>
	<div class="row mb-3">
		<div class="col-sm-10 offset-sm-2">
		<div class="form-check">
			<input class="form-check-input" type="checkbox" id="gridCheck1">
			<label class="form-check-label" for="gridCheck1">
			Example checkbox
			</label>
		</div>
		</div>
	</div>
	<button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>