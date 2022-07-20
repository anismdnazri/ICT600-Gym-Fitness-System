<?php session_start();
require_once 'pagehead.php';
?>
<body>

<div class="flex-container">
<header>
  <h1>Fitness Gym System: User Profile</h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>  
<link rel="stylesheet" href="all.css">
</header>

<?php include "pagenav.php" ?>

<article class="article">
    
<style>
table {
	font-family: arial, sans-serif;
	border-collapse: collapse;
	width: 80%;
}

td, th {
	border: 1px solid #dddddd;
	text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<?php
include 'dbconnect.php';

$username = $_SESSION['username'];

$sql = "SELECT username, role, status, fname, lname, email, pnumber, dob, address 
        FROM app_user 
        WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_assoc($result);
?>
    <h2 class="Banner">User Profile</h2>
    <div class="container1">
        <div class="row">
        <div class="w-100" style="padding-top: 15px;">
                <div class="alert alert-info" role="alert">
                    User Details
                </div>
        </div>    
        <div class="col">
                <label>Full Name</label>
                <input type="text" class="form-control" value="<?php echo $row["fname"] ?>" readonly>
            </div>
            <div class="col">
                <label>Last Name</label>
                <input type="text" class="form-control"  value="<?php echo $row["lname"] ?>" readonly>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <label>Email</label>
                <input type="text" class="form-control" value="<?php echo $row["email"] ?>" readonly>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <label>Phone Number</label><br>
                <input type="text" class="form-control" value="<?php echo $row["pnumber"] ?>" readonly>
            </div>
            <div class="col">
                <label>Date Of Birth</label>
                <input type="text" class="form-control" value="<?php echo $row["dob"] ?>" readonly>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <label>Address</label>
                <input type="textarea" class="form-control" value="<?php echo $row["address"] ?>" readonly>
            </div>
            <div class="w-100" style="padding-top: 15px;">
                <div class="alert alert-danger" role="alert">
                    You can  edit your information when click below "Edit Information" button !
                </div>
            </div>
            <div class="col">
                <div class="d-grid gap-2">
                    <a href="user_edit.php?fname=' . $user['fname'] . '"> Edit Information</a>
                </div>
            </div>
        </div>
    </div>
    
<?php
}
else
{
    echo "<p>0 results</p>";
}

mysqli_close($conn);
?>
</table>
</article>

<?php include "pagefoot.php" ?>