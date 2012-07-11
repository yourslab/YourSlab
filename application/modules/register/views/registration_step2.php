<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8" />
		<title>
			YourSlab - YourSlab is a universal meeting place for all types of user-groups. Want to share something? Login or signup today.
		</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="" />
		<meta name="author" content="Mico Abrina" />
		<!-- Include Stylesheets here -->
		<link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>css/homepage.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>css/bootstrap-responsive.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>css/scrollable-horizontal.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>css/scrollable-buttons.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>css/fileupload.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>css/bvalidator.css" type="text/css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>css/bvalidator.theme.red.css" type="text/css" rel="stylesheet"/>
		<!-- IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
			</script>
		<![endif]-->
	</head>
	<body>
		<div class="headerlong">
		</div>
        <div class="wrapper">
		<div class="container">
			<div class="header">
				<div id="row">
					<div class="span4" style="margin-left: -0.5px;">
						<a href="#"><img src="<?php echo base_url(); ?>img/yourslabshadow.png" height="43" width="211" class="headerlogo"/></a>
					</div>
					<div class="span4 offset1" style="margin-top: 23px;margin-left:85px;">
						<div class="input-append">
							<input placeholder="Search" type="text"/><button class="btn" type="button"><i class="icon-search"></i></button>
						</div>
					</div>
					<div class="span3" style="margin-top: 18px;">
						<a class="btn btn-success btn-large signup" style="font-size:20px;overflow:hidden;margin-left:95px;">Browse Slabs &raquo;</a>
					</div>
				</div>
			</div>
            <div class="mainbox">
            <div class="mainboxleft">
            <div class="stepbox">
            <h1 style="margin-left: 194px;margin-top:15px;"><span class="fadedtext">Step 1 &raquo; <span class="darkenedtext">Step 2</span> &raquo; Step 3</span></h1>
            </div>
            <div class="row">
            <div style="margin-left: 105px;">
            <?php
            $attributes = array('style' => 'margin-top: 100px;', 'class' => 'registerbox', 'id' => 'preregister');
            echo form_open_multipart('register/step3', $attributes);
            ?>
            <center>
            <h2>Profile Picture:</h2>
            </center>
            <div style="margin-left:50px;margin-bottom: 10px;">
            <span id="preview">
            <img src="<?php echo base_url(); ?>img/avatar.png" width="100px" height="100px" id="thumb"/>
        	</span>
            <span class="file-wrapper">
              <input type="file" name="photo" id="imageUpload" onchange="readURL(this);" data-bvalidator="image"/>
              <span class="button">Choose a Photo</span>
            </span>
            </div>
            <center>
            <button class="btn btn-warning" id="skipnext" style="height:35px; width: 300px;font-size:20px;margin-bottom:5px;">Skip &raquo;</button>
            <button class="btn" style="height:35px; width: 300px;font-size:20px;">&laquo; Back</button>
            </center>
            </form>
            </div>
            </div>
            </div>
            <div class="mainboxline">
            <center style="padding-top:23px;">
            <h1 style="margin-bottom: 40px;">Step 2</h1>
            <img src="<?php echo base_url(); ?>img/registration2.png" width="210" height="210"/>
            <h2>Upload a profile picture</h2>
            </center>
            <div style="margin-top:20px;">
            <h4 style="margin-left: 33px;">Registration Progress:</h4>
            <div class="progress progress-success progress-striped active" style="width: 85%;margin-left:33px;margin-top:5px;">
            <div class="bar" style="width: 50%;"></div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div class="push"><!--//--></div>
            </div>	
			<footer>
				<div class="container">
					Page loaded in
					<?php echo $this->
						benchmark->elapsed_time(); ?> seconds.
				</div>
			</footer>
		<!-- /container -->
		<!-- Insert javascript here==================================================-->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="<?php echo base_url(); ?>js/modernizr-2.5.3.js">
		</script>
		<script src="<?php echo base_url(); ?>js/bootstrap.js">
		</script>
		<script src="<?php echo base_url(); ?>js/jquery.js">
		</script>
		<script src="<?php echo base_url(); ?>js/ajaxupload.js">
		</script>
		<script type="text/javascript">   
        function readURL(input) {
            var imgfile = document.getElementById("imageUpload");
            var imgname = imgfile.value;
            var imgext = imgname.split('.').pop().toLowerCase();
            if((imgext == 'jpg') || (imgext == 'jpeg') || (imgext == 'bmp') || (imgext == 'gif') || (imgext == 'png')) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#thumb').attr('src', e.target.result);
                    $('#skipnext').attr('class', 'btn btn-success').html("Next &raquo;");
                }

                reader.readAsDataURL(input.files[0]);
            } else {
                alert("Your browser does not support Javascript File API.");
            }
            } else {
                $('#skipnext').attr('class', 'btn btn-warning').html("Skip &raquo;");
                $('#thumb').attr('src', '<?php echo base_url(); ?>img/avatar.png');
                alert("This file is not supported.");
            }
            }
		</script>
		<script src="<?php echo base_url(); ?>js/html5placeholder.jquery.js">
		</script>
		<script type="text/javascript">
			$('input').placeholder();
		</script>
	</body>
</html>