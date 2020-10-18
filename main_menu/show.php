
<?php include'../db.php';  ?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inventory</title>
</head>
<link rel = "stylesheet"
   type = "text/css"
   href = "css/main_menu.css">
<header>Inventory</header>
<body> 
  <div class="row" id="buttons">
  <form>
  <a style="position:absolute;left:10px;top:170px" type="button" class="back" href="../index.php">Back</a>
</form>
<form>
  <a style="position:absolute;left:10px;top:215px" type="button" class="light" href="../products/addproduct.php">Add</a>
</form>
<form action="update.php">
  <input style="position:absolute;left:10px;top:260px;width: 150px" name="update_btn" value="Update/Delete" type="submit" class="light">
</form>

</div>

<div class="column">
<?php include('../db.php');?>
<?php
$sql = "SELECT * FROM product";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
	 echo "<table><tr><th>User ID</th><th>Item Name</th><th>Category</th><th>Brand</th><th>Description</th></tr>";
  while($row = $result->fetch_assoc()) {
  	echo  "<tr><td>".$row["pid"]."</td><td>".$row["pname"]."</td><td> ".$row["category"]."</td><td>".$row["brand"]."</td><td>".$row["pdescs"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

$connect->close();
?>
</div>
<form action="filter.php">
  <input action="filter.php"  type="text" name="search" placeholder="Search...">
</form>

</body>
</html>
