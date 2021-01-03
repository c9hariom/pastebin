<!-- header start -->
<?php  include("include/header.php") ?>
<!-- header end -->
<!-- Nav bar start -->
<?php include("include/navbar.php") ?>
<!-- nav bar end -->
<br /><br /><br /><br />
<!--main content  -->
<div>
<?php
$id='';
if (isset($_POST['submit'])){
$title=mysqli_real_escape_string($conn,$_POST['title']);
$lang=mysqli_real_escape_string($conn,$_POST['syntax']);
$paste=mysqli_real_escape_string($conn,$_POST['paste']);
date_default_timezone_set("Asia/Calcutta"); 
$date=date('20y-m-d');
$time=date("h:i:s A");
$date="".$date."".$time;

if ($title==null or $title=="" or $title==''){
    $title="untitled";
}

$query="INSERT INTO BIN (bin_title,bin_paste,bin_lang,bin_date) VALUES ('{$title}','{$paste}','{$lang}','{$date}')";

$succ=mysqli_query($conn,$query);

if ($succ){
    // echo"Inserted";
    $id=mysqli_insert_id($conn);
}else{
    die("error is :".mysqli_error($conn));
}

}else{
    // echo"Hi there error occurred";
}


?>

</div>

<div class="container">
<br> <br> <br> <br> <br>
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
    <div class="row">    
        <div class="col-xs-12 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">  
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group image-preview" >
                <p id="link" type="text" class="form-control image-preview-filename"  selected disabled="true"><?php echo"http://copyhere.online/index2.php?p_id=".$id; ?></p><!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn kl-copy">
                    <!-- image-preview-clear button -->
                    <button id="btn" type="button" class="btn btn-default image-preview-input" onclick="myFunction('#link')">
                        <span style='color:blue'class="fa fa-copy"></span> Copy
                    </button>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
    </div>
</div>

<br> <br> <br> <br> <br>
<!-- main content end -->
<br /><br />
<!-- footer -->
<?php include ("include/footer.php") ?>
<!-- footer -->