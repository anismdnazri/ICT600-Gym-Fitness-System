 <?php session_start();
require_once 'pagehead.php';
?>
<body>
<div class="flex-container">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<link rel="stylesheet" href="stylesabout.css">

<header>
  <h1>Fitness Gym System: About</h1>
</header>

<?php include "pagenav.php"?>

<article class="article">
<?php 

if (isset($_GET['page'])) {
	if ($_GET['page'] == 'home') {
		header ('location:home.php');
	} elseif ($_GET['page'] == 'login') {
		include 'login.php';
	} elseif ($_GET['page'] == 'userview') {
		if ($_SESSION['role'] == 'admin') {
			include 'user_view.php';
		} else {
			$_SESSION['error'] = 1;
			include 'error.php';
		}
	} elseif ($_GET['page'] == 'useradd') {
		include 'user_add.php';	
	} elseif ($_GET['page'] == 'useredit') {
		include 'user_edit.php';	
	} elseif ($_GET['page'] == 'userdelete') {
		include 'user_delete.php';
  } elseif ($_GET['page'] == 'userprofile') {
	  include 'ApproveMember.php';	
  // uncomment the next two lines to add new item in the menu
  //} elseif ($_GET['page'] == 'useritems') {
  //	include 'user_items.php';	
	 } elseif ($_GET['page'] == 'error') {
		include 'error.php';
	 } else {
		include 'home.php';
	}
} 
?>
<h1>We make the world a healthier, happier place</h1>

<p>Gym fitness was founded by 5 bestfriend which Anis, Nad , Mun, Paih and Azwa in a quest to make our world a healthier, happier place.
 In 2020 Gym fitness offers coaching and management solutions for trainers, studios, clubs and corporate wellness and has grown into a
 leading player in digital fitness coaching and business management. </p><br>
 
<h1>Fitness Gym Vision</h1>
 
<p>Creating a healthier and happier world through innovative technology</p><br>
 
<h1>Rule of thumb Gym Fitness</h1>
 
<p>With Innovation and Care being two of our key values, a team of 100 people are constantly working hard to bring the best health
 and fitness innovations to the market, while providing unparalleled customer service to our customers. We like to be humble and 
 have an open and friendly philosophy, which means that we play nice with others, including our competition. We believe our customers
 are king, and should be able to use their data with other providers without hassle. An open philosophy also helps drive innovation
 and as such contributes to a healthier, happier world.</p><br>
 
 <div class="row">
  <div class="column">
    <div class="card">
      <img src="images/anis.png" alt="Anis" style="width:50%" style="height:50%" >
      <div class="container">
        <h2>Anis 'Aisyah Md Nazri</h2>
        <p class="title">CEO &amp; Founder</p>
        <p>CEO of the Gym Fitness System.</p>
        <p>anis@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/aimuni.jpeg" alt="Mun" style="width:50%" style="height:50%">
      <div class="container">
        <h2>Aimuni Nadhrah Bt Yazit</h2>
        <p class="title">Human Reseources (HR)</p>
        <p>Manager in HR of the Gym Fitness System.</p>
        <p>Mun@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/nad.png" alt="Nad" style="width:50%" style="height:50%">
      <div class="container">
        <h2>Siti Nadzirah Bt Parsikun</h2>
        <p class="title">Web Developer</p>
        <p>Programmer of the Gym Fitness System.</p>
        <p>Nad@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/faizah.png" alt="paih" style="width:50%" style="height:50%">
      <div class="container">
        <h2>Faizah Bt Ahmad Rodi</h2>
        <p class="title">Marketing Manager</p>
        <p>Marketing Manager of the Gym Fitness System.</p>
        <p>Paih@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/azwa.jpeg" alt="azwa" style="width:50%" style="height:50%">
      <div class="container">
        <h2>Nurul Azwa Atikah Ahmad Tarmizy</h2>
        <p class="title">Web Designer</p>
        <p>Web Designer of the Gym Fitness System.</p>
        <p>az@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
 
</article>
<?php include "pagefoot.php"?>