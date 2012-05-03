<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8">
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
            <h1 style="margin-left: 194px;margin-top:15px; color:#3E7C25;">Step 1 <span class="fadedtext">&raquo; Step 2 &raquo; Step 3</span></h1>
            </div>
            <div class="row">
            <center>
            <form style="margin-top: 100px;" class="registerbox">
            <h2>User Info:</h2>
            <input type="text" placeholder="Username" style="height:35px; width: 300px;font-size:20px;"/> <br />
            <input type="text" placeholder="Email" style="height:35px; width: 300px;font-size:20px;"/><br />
            <input type="password" placeholder="Password" style="height:35px; width: 300px;font-size:20px;"/><br />
            <input type="submit" class="btn btn-success" style="height:35px; width: 300px;font-size:20px;margin-bottom:5px;" value="Next &raquo;"/><br />
            <button class="btn" style="height:35px; width: 300px;font-size:20px;">Cancel</button>
            </form>
            </center>
            </div>
            </div>
            <div class="mainboxline">
            <center style="padding-top:20px;">
            <h1 style="margin-bottom: 40px;">Step 1</h1>
            <img src="<?php echo base_url(); ?>img/avatar.png" />
            <h2>Input your info</h2>
            </center>
            <div style="margin-top:20px;">
            <h4 style="margin-left: 33px;">Registration Progress:</h4>
            <div class="progress progress-success progress-striped active" style="width: 85%;margin-left:33px;margin-top:5px;">
            <div class="bar" style="width: 33.3333%;"></div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div class="push"><!--//--></div>
            </div>
            <div class="push"></div>
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