<?php session_start();
include "pagehead.php"
?>
<body>
<div class="flex-container">
<header>
  <h1>Fitness Gym System: Home</h1>
</header>
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 10px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>

<?php include "pagenav.php"?>
<article class="article">
	<h1><strong>WELCOME TO FITNESS GYM</strong></h1>

	<div class="row">
	  <div class="column">
		<img src="images/home1.jpeg" alt="gym1" width="300px" height="250px">
		<p style="text-align:justify">A gymnasium, also known as a gym, is a covered location for gymnastics, athletic, & gymnastics services.
		In Fitness Gym, people can come to do indoor recreation.</p>
	  </div>
	  <div class="column">
		<img src="images/home2.jpeg" alt="Gym" width="300px" height="250px"><br>
		<p style="text-align:justify">Fitness Gym provide many gymnasium apparatus for improving body performance such as barbells, parallel bars, jumping board, running path, tennis balls, cricket ball, fencing area and more.</p>
	  </div>
	  <div class="column">
		<img src="images/home3.jpeg" alt="gyjm" width="300px" height="250px">
		<p style="text-align:justify">Being a club member in Fitness Gym to receive many benefit every years. Register Now and try all the services and facilities that Fitness Gym offer </p>
	  </div>
	</div>	
</article>
 <?php include "pagefoot.php"?>