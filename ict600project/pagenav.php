<nav class="nav">
<ul>
  <li>User: <?php echo $_SESSION['username']?></li>
  <li>Role: <?php echo $_SESSION['role']?></li>
  <li><a href="home.php">Home</a></li>
  <li><a href="index.php">About</a></li>
  
  <?php 
  if ($_SESSION['role'] == 'admin') {
  	echo '<li><a href="review.php">Manage Users</a></li>';
  }
  if ($_SESSION['role'] == 'normal') {
  	echo '<li><a href="ApproveMember.php">Status</a></li>';
  }
  if ($_SESSION['role'] == 'normal') {
  	echo '<li><a href="profile_view.php">My Profile</a></li>';
  }
  if ($_SESSION['role'] == 'Guest') {
  	echo '<li><a href="register.php">Register Membership</a></li>';
  }
  
  ?>
  <?php 
  if ($_SESSION["username"] == 'Guest') {
 	 	echo '<li><a href="login.php">Login</a></li>';
	} else {
		echo '<li><a href="index.php?page=home&logout">Logout</a></li>';
	}
  ?>
  
</ul>
</nav>