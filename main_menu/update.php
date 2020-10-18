<?php
include_once '../db.php';
$result = mysqli_query($connect,"SELECT * FROM product");
?>
<!DOCTYPE html>
<html>
<head>
<title>Update | Delete</title>
</head>
<header>Update and Delete Item Inventory</header>
<link rel="stylesheet"
type = "text/css" href="css/mystyle.css">
<body><br><br><br>
<table>
<tr>
<th>User Name/ID</th>
<th>Item Name</th>
<th>Category</th>
<th>Brand</th>
<th>Description</th>
<th>Action</th>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<div  class="column">
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["pid"]; ?></td>
<td><?php echo $row["pname"]; ?></td>
<td><?php echo $row["category"]; ?></td>
<td><?php echo $row["brand"]; ?></td>
<td><?php echo $row["pdescs"]; ?></td>
<td id="table-button"><a id="update-button" href="update-process.php?pid=<?php echo $row["pid"]; ?>">Update</a><a id="update-button" href="delete-process.php?pid=<?php echo $row["pid"]; ?>">Delete</a></td>
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
  <input style=" { width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 14px;
  background-color: white;
  background-repeat: no-repeat;
  padding: 12px 15px 12px 40px;
  -webkit-transition: width 0.3s ease-in-out;
  transition: width 0.4s ease-in-out;
  position: absolute;
  top: 115px;
  left: 205px;}input:focus{width:30%;}" type="text" name="search" placeholder="Search...">
</form>
</body>
</html>