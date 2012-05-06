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
		<!-- IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
			</script>
		<![endif]-->
        
        <!-- Javascript can also be included here -->
        <script type="text/javascript" src="<?php echo base_url(); ?>js/si.files.js"></script>
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
            <h1 style="margin-left: 194px;margin-top:15px;"><span class="fadedtext">Step 1 &raquo; Step 2 &raquo; <span class="darkenedtext">Step 3</span></span></h1>
            </div>
            <div class="row">
            <div style="margin-left: -28px;">
            <form style="margin-top: 100px; width: 600px; height: 250px;" class="registerbox">
            <div style="margin-top:30px;">
			<div style="padding-bottom:30px;">To activate your account, open the activation email that was sent to your email account. In that email, you'll find a link with the words: "Click here to activate".</div>
            <center>
			<span class="checking">Checking</span>
            <img src="<?php echo base_url(); ?>/img/spinner_large_green.gif" style="margin-bottom:18px;"/>
			<div class="notyet">Not yet activated</div>
            </div>
            </center>
            </form>
            </div>
            </div>
            </div>
            <div class="mainboxline">
            <center style="padding-top:23px;">
            <h1 style="margin-bottom: 40px;">Step 3</h1>
            <img src="<?php echo base_url(); ?>img/registration2.png" width="210" height="210"/>
            <h2>Activate your account</h2>
            </center>
            <div style="margin-top:20px;">
            <h4 style="margin-left: 33px;">Registration Progress:</h4>
            <div class="progress progress-success progress-striped active" style="width: 85%;margin-left:33px;margin-top:5px;">
            <div class="bar" style="width: 75%;"></div>
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
		<script src="<?php echo base_url(); ?>js/html5placeholder.jquery.js">
		</script>
		<script type="text/javascript">
			$('input').placeholder();
		</script>
	</body>
</html>