<!-- header start -->
<?php  include("include/header.php") ?>
<!-- header end -->
<!-- Nav bar start -->
<?php include("include/navbar.php") ?>
<!-- nav bar end -->

<!--main content  -->

<div class="container-fluid">
	<div class="row">
    
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
		<form method="post" action="index3.php">
			<div class="col-md-9">
				<textarea id="paste12" class="textarea form" name='paste' placeholder="paste or write here..."
					style="padding:10px; font-size:16px;font-family:Open Sans; "></textarea>
				<br /><br /><div class="form-group "><div class="input-group"><span class="input-group-addon"><label>Highlighting</label><select name="syntax" class="form-control"><option value="txt">...</option><option value='asm'>Assembly</option><option value='cpp'>C,C++</option><option value='csharp'>C#</option><option value="css">CSS</option> <option value="cython">Cython</option> <option value="go">Go</option><option value='html'>HTML</option> <option value="ini">Ini</option><option value='java'>Java</option><option value='js'>Javascript</option><option value='json'>Json</option> <option value="kotlin">Kotlin</option> <option value="matlab">Matlab</option><option value="php">PHP</option> <option value="powershell">Powershell</option> <option value="prolog">Prolog</option><option value='py'>Python</option> <option value="raw">Raw</option><option value='ruby'>Ruby</option> <option value="rust">Rust</option><option value='sql'>SQL</option> <option value="swift">Swift</option><option value="xml">XML</option> <option value="yaml">Yaml</option></select></span><span class="input-group-addon"><label>Title</label><input type="text" class="form-control" name="title" placeholder="Title here..."></span><span class="input-group-addon"><button class="add btn btn-success" name="submit" type="submit"data-bind="click: addKeyValue">CreatePaste</button></span></div></div>			</div>
			<div class="col-md-3">
				<!-- Begin fluid width widget -->


<!-- ads here ----->

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
$query="SELECT * FROM BIN ORDER BY bin_id DESC LIMIT 8 ";
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
	</form>
</div>
</div>
</div>
</div>
<script>
	$('.select2').select2();
</script>
<br /><br />
<!-- main content end -->

<!-- footer -->
<?php include ("include/footer.php") ?>
<!-- footer -->
<!-- header start -->
<?php  include("include/header.php") ?>
<!-- header end -->
<!-- Nav bar start -->
<?php include("include/navbar.php") ?>
<!-- nav bar end -->

<!--main content  -->

<div class="container-fluid">
	<div class="row">
    
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
		<form method="post" action="index3.php">
			<div class="col-md-9">
				<textarea id="paste12" class="textarea form" name='paste' placeholder="paste or write here..."
					style="padding:10px; font-size:16px;font-family:Open Sans; "></textarea>
				<br /><br /><div class="form-group "><div class="input-group"><span class="input-group-addon"><label>Highlighting</label><select name="syntax" class="form-control"><option value="txt">...</option><option value='asm'>Assembly</option><option value='cpp'>C,C++</option><option value='csharp'>C#</option><option value="css">CSS</option> <option value="cython">Cython</option> <option value="go">Go</option><option value='html'>HTML</option> <option value="ini">Ini</option><option value='java'>Java</option><option value='js'>Javascript</option><option value='json'>Json</option> <option value="kotlin">Kotlin</option> <option value="matlab">Matlab</option><option value="php">PHP</option> <option value="powershell">Powershell</option> <option value="prolog">Prolog</option><option value='py'>Python</option> <option value="raw">Raw</option><option value='ruby'>Ruby</option> <option value="rust">Rust</option><option value='sql'>SQL</option> <option value="swift">Swift</option><option value="xml">XML</option> <option value="yaml">Yaml</option></select></span><span class="input-group-addon"><label>Title</label><input type="text" class="form-control" name="title" placeholder="Title here..."></span><span class="input-group-addon"><button class="add btn btn-success" name="submit" type="submit"data-bind="click: addKeyValue">CreatePaste</button></span></div></div>			</div>
			<div class="col-md-3">
				<!-- Begin fluid width widget -->


<!-- ads here ----->

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
