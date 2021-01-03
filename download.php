<?php 

include('include/db.php');

$bin_id=$_GET['p_id'];

$query="SELECT * FROM BIN WHERE BIN_ID='{$bin_id}'";
$bin_data=mysqli_query($conn,$query);
while($result=mysqli_fetch_assoc($bin_data)){
	$bin_id=$result['bin_id'];
	$bin_title=mysqli_real_escape_string($conn,$result['bin_title']);
	$bin_paste=$result['bin_paste'];
	$bin_lang=$result['bin_lang'];
	$bin_date=$result['bin_date'];
}

 $bin_lang="txt";

$k= (substr($bin_title,0,40)."_".$bin_id.".".$bin_lang);

    $handle = fopen("".$k, "w");
    fwrite($handle, $bin_paste);
    fclose($handle);

    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename='.basename($k));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($k));
    readfile("".$k,  "w");
    unlink("".$k);
   
    exit;
     unlink($k);
    header("Location:copyhere.online/index2.phpPp_id={$bin_id}");
?>
















?>