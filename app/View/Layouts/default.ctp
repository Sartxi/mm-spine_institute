<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>The Spine Insitute</title>
	<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700|Kalam:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/app.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<!--[if lte IE 8]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script src="/js/respond.min.js"></script>
    <![endif]-->  
    <script src="/js/app.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<div id="body">
		<div id="header" class="head">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<a href="/"><img src="/img/logo.png" class="img-responsive img-rounded"/></a>
					</div>
					<div class="col-md-6 col-sm-6 text-right titles hidden-xs">
						<div class="row numbers">
							<div class="col-md-12">
								<a href="http://www.mmprotherapy.com/index.html" target="_blank"><img src="/img/logo.jpg" class="img-responsive img-rounded mmlogo"/></a>		
							</div>
							<div class="col-md-4">
								<h4><small>Tooele (Main Steet):</small><br />435-882-3157</h4>
							</div>
							<div class="col-md-4">
								<h4><small>Tooele (Northpoint):</small><br />435-843-1311</h4>
							</div>
							<div class="col-md-4">
								<h4><small>West Valley:</small><br />801-955-0500</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?=$this->Element('nav'); ?>
		<div id="content" class="container">
			<?=$this->Session->flash(); ?>
			<?=$this->fetch('content'); ?>
		</div>
		<div id="footer" class="foot">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<a href="/"><img src="/img/logo.png" class="img-responsive img-rounded footerlogo center-block"/></a>
						<br />
						<p class="text-center">&copy; 2015 The Spine Institute</p>
					</div>
					<div class="col-md-7">
						<h3 class="hands">About Us</h3>
						<hr>
						<p>With over 20 years experience treating orthopedic and sports injuries, our focus is hands-on personal care to give you what you need in as few visits as possible.  You get better results and more value.</p>
						<p>Call us if you would like to talk to one or our physical therapists about your condition.</p>
						<p>Recipient of the Best of <strong>Tooele Physical Therapy Clinics</strong> award 2014.</p>
					</div>
					<div class="col-md-2 text-center">
						<h3 class="hands">Navigation</h3>
						<hr>
						<ul class="list-unstyled footnav">
							<li><a href="/">Home</a></li>
							<li><a href="/about">About</a></li>
							<li><a href="/contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
