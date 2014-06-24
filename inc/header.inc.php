<?php
include ( "connect.inc.php" );
session_start();
if (!isset($_SESSION["email_login"])) {

}
else
{
	//$email = $_SESSION["email_login"]
	header("location: home.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Kaleydoskop</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="style.css">
	</head>
  <body>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>

	
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
 	<div class="" id="status">
 		
 	</div>

      <div  class="container">
        <div  class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Kaleydeskop</a>
        </div>
        <div class="navbar-collapse collapse">
</html>