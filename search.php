<!-- header start -->
<?php  include("include/header.php") ?>
<style type="text/css">
.tracking-detail {
 padding:3rem 0
}
#tracking {
 margin-bottom:1rem
}
[class*=tracking-status-] p {
 margin:0;
 font-size:1.1rem;
 color:#fff;
 text-transform:uppercase;
 text-align:center
}
[class*=tracking-status-] {
 padding:1.6rem 0
}
.tracking-status-intransit {
 background-color:#65aee0
}
.tracking-status-outfordelivery {
 background-color:#f5a551
}
.tracking-status-deliveryoffice {
 background-color:#f7dc6f
}
.tracking-status-delivered {
 background-color:#4cbb87
}
.tracking-status-attemptfail {
 background-color:#b789c7
}
.tracking-status-error,.tracking-status-exception {
 background-color:#d26759
}
.tracking-status-expired {
 background-color:#616e7d
}
.tracking-status-pending {
 background-color:#ccc
}
.tracking-status-inforeceived {
 background-color:#214977
}
.tracking-list {
 border:1px solid #e5e5e5
}
.tracking-item {
 border-left:1px solid #e5e5e5;
 position:relative;
 padding:2rem 1.5rem .5rem 2.5rem;
 font-size:14px;
 margin-left:3rem;
 min-height:5rem
}
.tracking-item:last-child {
 padding-bottom:4rem
}
.tracking-item .tracking-date {
 margin-bottom:.5rem
}
.tracking-item .tracking-date span {
 color:#888;
 font-size:85%;
 padding-left:.4rem
}
.tracking-item .tracking-content {
 padding:.5rem .8rem;
 background-color:#f4f4f4;
 border-radius:.5rem
}
.tracking-item .tracking-content span {
 display:block;
 color:#888;
 font-size:85%
}
.tracking-item .tracking-icon {
 line-height:2.6rem;
 position:absolute;
 left:-1.3rem;
 width:2.6rem;
 height:2.6rem;
 text-align:center;
 border-radius:50%;
 font-size:1.1rem;
 background-color:#fff;
 color:#fff
}
.tracking-item .tracking-icon.status-sponsored {
 background-color:#f68
}
.tracking-item .tracking-icon.status-delivered {
 background-color:#4cbb87
}
.tracking-item .tracking-icon.status-outfordelivery {
 background-color:#f5a551
}
.tracking-item .tracking-icon.status-deliveryoffice {
 background-color:#f7dc6f
}
.tracking-item .tracking-icon.status-attemptfail {
 background-color:#b789c7
}
.tracking-item .tracking-icon.status-exception {
 background-color:#d26759
}
.tracking-item .tracking-icon.status-inforeceived {
 background-color:#214977
}
.tracking-item .tracking-icon.status-intransit {
 color:#e5e5e5;
 border:1px solid #e5e5e5;
 font-size:.6rem
}
@media(min-width:992px) {
 .tracking-item {
  margin-left:10rem
 }
 .tracking-item .tracking-date {
  position:absolute;
  left:-10rem;
  width:7.5rem;
  text-align:right
 }
 .tracking-item .tracking-date span {
  display:block
 }
 .tracking-item .tracking-content {
  padding:0;
  background-color:transparent
 }
}
.tracking-detail {
 padding:3rem 0
}
#tracking {
 margin-bottom:1rem
}
[class*=tracking-status-] p {
 margin:0;
 font-size:1.1rem;
 color:#fff;
 text-transform:uppercase;
 text-align:center
}
[class*=tracking-status-] {
 padding:1.6rem 0
}
.tracking-status-intransit {
 background-color:#65aee0
}
.tracking-status-outfordelivery {
 background-color:#f5a551
}
.tracking-status-deliveryoffice {
 background-color:#f7dc6f
}
.tracking-status-delivered {
 background-color:#4cbb87
}
.tracking-status-attemptfail {
 background-color:#b789c7
}
.tracking-status-error,.tracking-status-exception {
 background-color:#d26759
}
.tracking-status-expired {
 background-color:#616e7d
}
.tracking-status-pending {
 background-color:#ccc
}
.tracking-status-inforeceived {
 background-color:#214977
}
.tracking-list {
 border:1px solid #e5e5e5
}
.tracking-item {
 border-left:1px solid #e5e5e5;
 position:relative;
 padding:2rem 1.5rem .5rem 2.5rem;

 margin-left:3rem;
 min-height:5rem
}
.tracking-item:last-child {
 padding-bottom:4rem
}
.tracking-item .tracking-date {
 margin-bottom:.5rem
}
.tracking-item .tracking-date span {
 color:#888;
 font-size:85%;
 padding-left:.4rem
}
.tracking-item .tracking-content {
 padding:.5rem .8rem;
 background-color:#f4f4f4;
 border-radius:.5rem
}
.tracking-item .tracking-content span {
 display:block;
 color:#888;
 font-size:85%
}
.tracking-item .tracking-icon {
 line-height:2.6rem;
 position:absolute;
 left:-1.3rem;
 width:2.6rem;
 height:2.6rem;
 text-align:center;
 border-radius:50%;
 font-size:1.1rem;
 background-color:#fff;
 color:#fff
}
.tracking-item .tracking-icon.status-sponsored {
 background-color:#f68
}
.tracking-item .tracking-icon.status-delivered {
 background-color:#4cbb87
}
.tracking-item .tracking-icon.status-outfordelivery {
 background-color:#f5a551
}
.tracking-item .tracking-icon.status-deliveryoffice {
 background-color:#f7dc6f
}
.tracking-item .tracking-icon.status-attemptfail {
 background-color:#b789c7
}
.tracking-item .tracking-icon.status-exception {
 background-color:#d26759
}
.tracking-item .tracking-icon.status-inforeceived {
 background-color:#214977
}
.tracking-item .tracking-icon.status-intransit {
 color:#e5e5e5;
 border:1px solid #e5e5e5;
 font-size:.6rem
}
@media(min-width:992px) {
 .tracking-item {
  margin-left:10rem
 }
 .tracking-item .tracking-date {
  position:absolute;
  left:-10rem;
  width:7.5rem;
  text-align:right
 }
 .tracking-item .tracking-date span {
  display:block
 }
 .tracking-item .tracking-content {
  padding:0;
  background-color:transparent
 }
}</style>
<!-- header end -->
<!-- Nav bar start -->
<?php include("include/navbar.php") ?>
<!-- nav bar end -->
<br /><br /><br /><br />
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


<?php 

if (isset($_GET['p_id'])){
$bin_id=$_GET['p_id'];

$query="SELECT * FROM BIN LIMIT 60 ORDER BY bin_id DESC";
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



<!--main content  -->
<div class="container" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font:14px;">
<div class="row">
      
      <div class="col-md-9">
         <div id="tracking">
            <div class="tracking-list">

<?php 


$query="SELECT * FROM BIN WHERE bin_title like '%{$_POST['q']}%' order by bin_id DESC limit 400";
$bin_data=mysqli_query($conn,$query);
$count=mysqli_num_rows($bin_data);
echo"<p>".$count." results matches your search query</p>";
while($result=mysqli_fetch_assoc($bin_data)){
	$bin_id=$result['bin_id'];
	$bin_title=$result['bin_title'];
	$bin_paste=$result['bin_paste'];
	$bin_lang=$result['bin_lang'];
	$bin_date=$result['bin_date'];

?>
               <div class="tracking-item">
                  <a href=<?php echo "'index2.php?p_id=".$bin_id."'" ?>><div class="tracking-date"><?php echo substr($bin_date,0,10); ?><span><?php echo substr($bin_date,10) ?></span></div></a>
                  <div class="tracking-content"><a href=<?php echo "'index2.php?p_id=".$bin_id."'" ?>><?php echo "Title: ".$bin_title ?></a><span><?php echo "File Type: ".$bin_lang ?></span></div>
               </div>
               <hr/>
               <?php } ?>
            </div>
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
$query="SELECT * FROM BIN ORDER BY bin_id DESC LIMIT 16 ";
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


<!-- main content end -->
<br /><br />
<!-- footer -->
<?php include ("include/footer.php") ?>
<!-- footer -->
