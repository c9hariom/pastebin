<?php include('include/db.php') ?>
<?php 

if (isset($_GET['p_id'])){
$bin_id=$_GET['p_id'];

$query="SELECT bin_paste FROM BIN WHERE BIN_ID='{$bin_id}'";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result)){
    echo "<xmp>".$row['bin_paste']."</xmp>";
}
	
}


?>