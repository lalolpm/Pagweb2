<!DOCTYPE html>
<html>
<head>
	<title> Proyecto Web </title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1,minimum-scale=1"> 
	
	<?php include "paginas/scripts.php"; ?>


</head>
<body>
<?php 
	
	session_start();
	if(empty($_SESSION['active']))
	{
		header("location: login.php");
	}

	else{

		include "paginas/header.php";  
		include "paginas/footer.php"; 

	}
?> 

	<script src ="js/menu.js"></script>

</body>
</html>



