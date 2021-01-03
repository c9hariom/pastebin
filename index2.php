
<!-- header start -->

<?php  include("include/header.php") ?>
<!-- header end -->
<!-- Nav bar start -->
<?php include("include/navbar.php") ?>
<!-- nav bar end -->
<?php 

if (isset($_GET['p_id'])){
$bin_id=$_GET['p_id'];

$query="SELECT * FROM BIN WHERE BIN_ID='{$bin_id}'";
$bin_data=mysqli_query($conn,$query);
while($result=mysqli_fetch_assoc($bin_data)){
	$bin_id=$result['bin_id'];
	$bin_title=$result['bin_title'];
	$bin_paste=$result['bin_paste'];
	$bin_lang=$result['bin_lang'];
	$bin_date=$result['bin_date'];
}

}else{
	
}


?>

<div class="container-fluid">

	<div class="content">
		<br /><br /><br />
        <center>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- wer -->
<ins class="adsbygoogle"
     style="display:inline-block;min-width:450px;min-height:50px;max-height:90px;max-width:1000px;"
     data-ad-client="ca-pub-5070690609617311"
     data-ad-slot="3880530299"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
        </center>
		<!-- ############################################################# -->
		<div class="col-md-9">
			<label class='title' style="font:15px tahoma"><?php echo "<span style='font:16px bold tahoma;color:purple'>Title:</span> ".$bin_title."            <span style='font:16px bold tahoma;color:blue'>Date:</span> ".substr($bin_date,0,10)." at  ".substr($bin_date,10) ?></label>
			<xmp id="link" data-enlighter-language="<?php echo $bin_lang ?>" data-enlighter-highlight="5" data-enlighter-group="group1"><?php echo $bin_paste; ?>
</xmp>
<label>Raw Paste Data</label><br/><textarea id="paste12" class="textarea form" name='paste' placeholder="paste or write here..."
					style="padding:10px; font-size:16px;font-family:Open Sans;"><?php echo $bin_paste?></textarea><br/>
                    <div style="padding:10px; font-size:16px;font-family:Open Sans;margin-left:10px;">
			<button class="btn btn-default fa fa-copy"  onclick="myFunction('#link')"> Copy</button>
			<a href='raw.php?p_id=<?php echo $bin_id ?>'><button class="btn btn-default fa fa-file-o" type='button' class="btn"> Raw</button></a>
			<a href='download.php?p_id=<?php echo $bin_id ?>'><button class="btn btn-default fa fa-download" type='button' class="btn"> Download</button></a>
            </div>
		</div>
		<div class="col-md-3">

			<!-- Begin fluid width widget -->

<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">
						</h3>
					</div>
					<div class="panel-body">

<!-- respon -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5070690609617311"
     data-ad-slot="8899043989"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

					</div>
				</div>


			<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">
							<span class="">Recent Pastes</span>
						</h3>
					</div>
					<div class="panel-body">
<ul class="media-list">
<?php
$query="SELECT * FROM BIN ORDER BY bin_id DESC LIMIT 12 ";
$bin_data=mysqli_query($conn,$query);
while($result=mysqli_fetch_assoc($bin_data)){
	$bin_id=$result['bin_id'];
	$bin_title=$result['bin_title'];
	$bin_paste=$result['bin_paste'];
	$bin_lang=$result['bin_lang'];
	$bin_date=$result['bin_date'];
?> <li class="">
                            <div class="">
                                <p class="">
                                   <?php echo "<a href='index2.php?p_id=".$bin_id."'<span class='fa fa-file' style='font-size:16px;color:#616161'>   <span class='fa fa-blank'></span>  <span class='fa fa-blank'></span>       ".substr($bin_title,0,20).".".$bin_lang."</span></a>"?>
                                </p>
                            </div>
                        </li>
                        <?php }?>
                 </ul>
					</div>
				</div>
			<!-- End fluid width widget -->



		</div>
	</div>
</div>
<br />

<!-- footer -->
<?php include ("include/footer.php") ?>