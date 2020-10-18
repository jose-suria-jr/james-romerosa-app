<?php
include_once '../db.php';
$result = mysqli_query($connect,"SELECT * FROM product");
?>
<!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
<header>Current Inventory</header>
<link rel="stylesheet"
type = "text/css" href="css/mystyle.css">
</head>
<body><br><br><br><br>
	<div style="width: 97%;float: right" class="column">
<table>
<tr>
<th>User Name/ID</th>
<th>Item Name</th>
<th>Category</th>
<th>Brand</th>
<th>Description</th>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["pid"]; ?></td>
<td><?php echo $row["pname"]; ?></td>
<td><?php echo $row["category"]; ?></td>
<td><?php echo $row["brand"]; ?></td>
<td><?php echo $row["pdescs"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</div>
<div class="row">
	<a style="	position: absolute;
	left: 10px;
	top: 170px;" class="back" href="show.php">Back</a>

</div>
<form action="filter.php">
  <input action="filter.php"  type="text" name="search" placeholder="Search...">
</form>
</body>
</html> 