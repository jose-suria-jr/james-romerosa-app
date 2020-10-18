<?php include'../db.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Item</title>
</head>
<link rel = "stylesheet"
   type = "text/css"
   href = "../css/stylesheet.css">
<body>

<h1 style="text-align:center ">Add new item </h1>
<div id="main">
<div class="div1">
<form method="post" action="process.php" id="form">
	<p class="p1">User Name/ID:</p><input type="text" name="pid" class="input"><br>
	<p class="p1">Product Name:</p><input type="text" name="pname" class="input"><br>
	<p class="p1">Product Category:</p><input type="text" name="catid" class="input"><br>
	<p class="p1">Product Brand:</p><input type="text" name="brandid" class="input"><br>
	<p class="p1">Product Description:</p><textarea name="pdescs" class="textarea" rows="5" cols="30"></textarea>
</div>
<div id="btn2">
	<input onclick="" value="Submit" type="submit" name="submit" class="green">
	<button onclick="myFunction()" name="refresh" value="Cancel" class="btncancel">Refresh</button>
	<a type="button" name="cancel" class="btncancel" href="../index.php">Main Menu</a>
	<a type="button" name="cancel" class="green" href="../main_menu/show.php">Show Items</a>
</div>
</div>

</form>

<script type="text/javascript">
	

function myFunction(){

	location.href = "addproduct.php";
}	
</script>
</body>
</html>