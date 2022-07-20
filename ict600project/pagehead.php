<?php
if (!isset($_SESSION["username"])) {
	$_SESSION["username"] = "Guest";
	$_SESSION["role"] = "Guest";
}
if (isset($_GET["logout"])) {
	$_SESSION["username"] = "Guest";
	$_SESSION["role"] = "Guest";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fitness Gym System</title> 
    <link rel="stylesheet" href="stylesheader.css">
    <link rel="icon" type="image/x-icon" href="images/gym.png">

</head>