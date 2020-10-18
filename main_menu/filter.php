<!DOCTYPE html>
<html>
<head>
    <title>Search</title>
</head>
<header>You are looking for....</header>
<link rel="stylesheet" type="text/css" href="css/mystyle.css">
<body>
    <div style="width: 97%;float: right;padding-top: 70px" class="column">

<?php include '../db.php';

if($connect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 // Attempt select query execution
$sql = "SELECT * FROM product WHERE pid ='" . $_GET['search'] . "'";
if($result = mysqli_query($connect, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        echo "<table>";
            echo "<tr>";
                echo "<th>User Name/ID</th>";
                echo "<th>Item name</th>";
                echo "<th>Category</th>";
                echo "<th>Brand</th>";
                echo "<th>Description</th>";
                echo "<th>Action</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['pid'] . "</td>";
                echo "<td>" . $row['pname'] . "</td>";
                echo "<td>" . $row['category'] . "</td>";
                echo "<td>" . $row['brand'] . "</td>";
                echo "<td>" . $row['pdescs'] . "</td>";
                ?>
                <td id="table-button"><a id="update-button" href="update-process.php?pid=<?php echo $row["pid"]; ?>">Update</a><a id="update-button" href="delete-process.php?pid=<?php echo $row["pid"]; ?>">Delete</a></td>
                <?php
            echo "</tr>";
        }
        echo "</table>";
        
        // Close result set
        mysqli_free_result($result);

    } else{
          echo "<p> No record matching were found...</p>";
    }
}else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}
// Close connection
mysqli_close($connect);
?>
</div>
<div class="row">
    <a style="  position: absolute;
    left: 10px;
    top: 170px;" class="back" href="show.php">Back</a> 
</div>
<form action="filter.php">
  <input class="search" type="text" name="search" placeholder="Search...">
</form>
</body>
</html>

