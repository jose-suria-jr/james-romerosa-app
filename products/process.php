<?php include '../db.php';

if($_POST['submit']){
$pid=$_POST['pid'];
$pname=$_POST['pname'];
$pdescs=$_POST['pdescs'];
$category=$_POST['catid'];
$brand=$_POST['brandid'];

$stmt = $connect->prepare("INSERT INTO product (`pid`, `pname`,`category`,`brand`, `pdescs`) VALUES ('$pid', '$pname','$category','$brand', '$pdescs')");
$stmt->execute();
header('Location:addproduct.php');
}
else
{
	header('Location:addproduct.php');
}
?>	