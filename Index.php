<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./Styles/Style.css">
	<script type="text/javascript" src="./Scripts/TableDraw.js"></script>
	<script type="text/javascript" src="./Scripts/CollorAdd.js"></script>
</head>
<body>
<?php
	include './Backend/Generators/TableDraw.php';
	include './Backend/Generators/ColorPalette.php';
	include './Backend/Generators/Forms.php';


	if(isset($_POST['W']) && isset($_POST['H']) && isset($_POST['Colors'])){
		echo DrawTable($_POST['W'],$_POST['H']);
		echo DrawPalette($_POST['Colors']);	
	}
	else
		DrawForm();
?>
</body>
</html>