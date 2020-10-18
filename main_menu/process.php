<?php include '../db.php';
$errors = array();

if($_POST['submit']){
$pname=$_POST['pname'];
$pdescs=$_POST['pdescs'];
$catid=$_POST['catid'];
$brandid=$_POST['brandid'];

$stmt = $connect->prepare("INSERT INTO `product` (`pid`, `pname`,`category`,`brand`, `pdescs`) VALUES (NULL, '$pname','$catid','$brandid', '$pdescs')");
$stmt->execute();
header('Location:show.php');
}
else
{
	header('Location:show.php');
}
	if(empty($pname)){
		echo "put item name";
	}

?>	