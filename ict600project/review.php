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
</header>
<?php include "pagenav.php"?>
 
		<article class="article">
		<div class="col-md-12">
		</div>
	<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">	
                         <?php
                    // Include config file
                    require_once "dbconnect.php";

                    // select all users
                    $data = "SELECT * FROM app_user";
                    if($app_user = mysqli_query($conn, $data)){
                        if(mysqli_num_rows($app_user) > 0){
                            echo "<table class='table table-bordered table-striped'>
                                    <thead>
                                      <tr>                          
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Phone Number</th>
										<th>Email</th>
										<th>Username</th>
                                        <th>Address</th>
										<th>Date of Birth</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>";
                                while($user = mysqli_fetch_array($app_user)) {
                                    echo "<tr>
                                            <td>" . $user['fname'] . "</td>
                                            <td>" . $user['lname'] . "</td>
											<td>" . $user['pnumber'] . "</td>
                                            <td>" . $user['email'] . "</td>
                                            <td>" . $user['username'] . "</td>
											<td>" . $user['address'] . "</td>
                                            <td>" . $user['dob'] . "</td>";   
											
											
									echo '	<td>				
												<a href="approve.php?fname=' . $user['fname'] . '"> 
												<button Class="btn btn-primary btn-sm">Approved </button></a>' ;
												
											echo "</td>";
											echo "</tr>";
                                }
                                echo "</tbody>
                                </table>";
                            mysqli_free_result($app_user);
                        } else{
                            echo "<p class='lead'><em>No records found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                    }

                    // Close connection
                    mysqli_close($conn);
                    ?>
					
                </div>
            </div>
        </div>
    </div>
  </body>
</html>            
        </article>
<?php include "pagefoot.php"?>                 