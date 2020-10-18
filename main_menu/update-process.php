<?php
include_once '../db.php';
if(count($_POST)>0) {
mysqli_query($connect,"UPDATE product set pid='" . $_POST['pid'] . "', pname='" . $_POST['pname'] . "', category='" . $_POST['category'] . "', brand='" . $_POST['brand'] . "' ,pdescs='" . $_POST['pdescs'] . "' WHERE pid='" . $_POST['pid'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($connect,"SELECT * FROM product WHERE pid='" . $_GET['pid'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Inventory Data</title>
</head>
<header>Update Inventory Data </header>
<br><br>
<link rel="stylesheet"
type = "text/css" href="css/mystyle.css">
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div> 
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center">
</div>
<tr>
User Name/ID: <br>
<input type="hidden" name="pid" class="txtField" value="<?php echo $row['pid']; ?>">
<input type="text" name="pid" class="txtField"  value="<?php echo $row['pid']; ?>">
<br>
Item Name: <br>
<input type="text" name="pname" class="txtField" value="<?php echo $row['pname']; ?>">
<br>
Category :<br>
<input type="text" name="category" class="txtField" value="<?php echo $row['category']; ?>">
<br>
Brand:<br>
<input type="text" name="brand" class="txtField" value="<?php echo $row['brand']; ?>">
<br>
Description:<br>
<input type="text" name="pdescs" class="txtField" value="<?php echo $row['pdescs']; ?>">
<br><br>
<input href=""  type="submit" name="submit" value="Submit" class="buttom">
<a style="width: 180px;padding: 10px" class="back" href="update.php">Back to Update</a>
<a href="retrieve.php" class="buttom">List User</a>
</form>
</body>
</html>