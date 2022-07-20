<?php session_start();
require_once 'pagehead.php';
?>
<div class="flex-container">
<header>
  <h1>Fitness Gym System : Membership</h1>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
  <meta charset="UTF-8">
 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <style type="text/css">
          .wrapper {
              width: 1200px;
              margin: 0 auto;
          }
		  
      </style>
</head>
</header>
<?php include "pagenav.php"?>
 
		<article class="article">
		<div class="col-m
<body>
       <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
  <?php
    if (isset($_GET["fname"]) && !empty(trim($_GET["fname"]))) {
        require_once "dbconnect.php";

        $fname = trim($_GET["fname"]);
        $query = mysqli_query($conn, "SELECT * FROM app_user WHERE fname = '$fname'");

        if ($user = mysqli_fetch_assoc($query)) {
            $fname   = $user["fname"]; 
            $lname   = $user["lname"];
            $pnumber     = $user["pnumber"];
			$address   = $user["address"];
			$email   = $user["email"];
			$username   = $user["username"];
			$dob   = $user["dob"];
        } else {
            header("location: approve.php");
            exit();
        }

        mysqli_close($conn);
    } else {
        header("location: approve.php");
        exit();
    }
  ?>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1> Membership Approved</h1>
                    </div>
                    <div class="form-group">
                      <th><label>First Name</label></th>
                        <p class="form-control-static"><?php echo $fname ?></p>
                    </div>                  
                    <div class="form-group">
                        <label>Last Name</label>
                        <p class="form-control-static"><?php echo $lname ?></p>
                    </div>
                    <div class="form-group">
                        <label>Phone Number</label>
                        <p class="form-control-static"><?php echo $pnumber?></p>
                    </div>
					 <div class="form-group">
                        <label>Email</label>
                        <p class="form-control-static"><?php echo $address ?></p>
                    </div>
					<div class="form-group">
                        <label>Username</label>
                        <p class="form-control-static"><?php echo $email ?></p>
                    </div>
					<div class="form-group">
                        <label>Address</label>
                        <p class="form-control-static"><?php echo $username ?></p>
                    </div>
					<div class="form-group">
                        <label>Date of Birth</label>
                        <p class="form-control-static"><?php echo $dob ?></p>
                    </div>
                    <p><a href="review.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>
        </div>
    </div>
	
</body>
</html>

 </article>
<?php include "pagefoot.php"?>