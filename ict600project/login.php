<?php session_start();
include "pagehead.php"
?>
<body>
<div class="flex-container">
<header>
  <h1>Fitness Gym System: Login</h1>
</header>

<?php include "pagenav.php"?>
<article class="article">
<?php
if (isset ( $_POST ['login'] )) {
	$username = $_POST ['username'];
	$password = $_POST ['password'];
	
	include 'dbconnect.php';
	
	// SQL query
	$strSQL = "SELECT `role`, 
					`status` 
					FROM `app_user`
					WHERE username = '$username' AND
						password = PASSWORD('$password')";
	
	// Execute the query (the recordset $rs contains the result)
	$rs = mysqli_query ( $conn, $strSQL );
	$row = mysqli_fetch_array ( $rs, MYSQLI_ASSOC );
	if (mysqli_num_rows ( $rs ) == 1) {
		
		$_SESSION ['username'] = $username;
		$_SESSION ['role'] = $row ['role'];
		/*
		echo '<p>Hello ' . $username . '</p>';
		echo '<p>You are ' . $_SESSION ['role'] . ' user</p>';
		echo '<form method="get" action="index.php?page=home">';
		echo '<input type="submit" value="OK">';
		echo '</form';
		*/
		header("Location: index.php?page=home");
		die();
	} else {
		echo 'incorrect username and/or password. Please login again.';
	}
} else {
	$username = '';
	$_SESSION ['username'] = '';
}
?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="all.css">

<form method="POST"	action="index.php?page=login" >
	<div class="containerLogin">
		<h2>Login</h2>
		<div class="mb-3">
			<label class="form-label">User Name : </label>
			<input type="text" class="form-control" name="username" placeholder="Insert Your Username">
		</div>
		<div class="mb-3">
			<label class="form-label">Password : </label>
			<input type="password" class="form-control" name="password" placeholder="Insert Your Password">
		</div>
		<button type="submit" value="Login" name="login" class="btn btn-primary">Submit</button>
	</div>
</form>
</article>
 <?php include "pagefoot.php"?>