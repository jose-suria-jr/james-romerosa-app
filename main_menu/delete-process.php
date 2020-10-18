<?php
include_once '../db.php';
$sql = "DELETE FROM product WHERE pid='" . $_GET["pid"] . "'";
if (mysqli_query($connect, $sql)) {
    header('Location:update.php');
} else {
    echo "Error deleting record: " . mysqli_error($connect);
}
mysqli_close($connect);
?>