<!doctype html>
<html lang="en">
<head>
<?php 
include 'handler.php';

if (!empty(GetDeviceName($_GET['name']))) {
	echo "	<meta charset=\"utf-8\">\n";
    echo "	<title>lluvia.ga - Download LLuviaOS for " . GetDeviceName($_GET['name']) . " (" . $_GET['name'] . ")" . "</title>\n\n";
    echo "	<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">\n";
    echo "	<meta name=\"description\" content=\"official LLuviaOS for " . GetDeviceName($_GET['name']) . " (" . $_GET['name'] . ")" . "\">\n";
    echo "	<meta name=\"keywords\" content=\"LLuvia, LLuviaOS ROM, ROM, " . GetDeviceName($_GET['name']) . ", " . $_GET['name'] .  "\">\n";
    $id = $_GET['name'];
}else{
    header("Location: https://lluvia.ga/", true, 301);
    exit;
}
?>

	<!-- Favicons -->
	<link href="img/logo.png" rel="icon">
	
	<!-- Google Fonts -->
	<link rel="dns-prefetch" href="//fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

	<!-- Bootstrap css -->
	<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Libraries CSS Files -->
	<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link href="lib/animate/animate.min.css" rel="stylesheet">
	<link href="lib/modal-video/css/modal-video.min.css" rel="stylesheet">

	<!-- Main Stylesheet File -->
	<link href="css/style.css" rel="stylesheet">

	<!-- Google verification -->
	<meta name="google-site-verification" content="v_DBWc21zWokjHdPNpABWYSkB3lSz6u7mPGXsmOPGt8" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-6432969-5"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-6432969-5');
	</script>
</head>

<body>

<header id="header" class="header header-hide">
	<div class="container">
		<div id="logo" class="pull-left">
			<h1><a href="https://lluvia.ga" class="scrollto"><span>LL</span>uvia <span>OS</span></a></h1>
			<!-- Uncomment below image logo -->
			<!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
		</div>

		<nav id="nav-menu-container">
			<ul class="nav-menu">
			<li><a href="https://lluvia.ga">Home</a></li>
			<li><a href="dl.php">All devices</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
		</nav>
	</div>
</header>
  
<!--==========================
	Get Started Section
============================-->
<section class="padd-section text-center wow fadeInUp">
    <div class="container">
      <div class="section-title text-center">
        <h2>Ready to LLuvi-ify your<br><?php echo GetDeviceName($_GET['name']);?>?</h2>
        <p class="separator">Cool, seems you are ready to download<br>Check below info to get started<br></p>
	  </div>
    </div>
</section>

<!--==========================
	Download section
============================-->
<div class="container">
	<div class="col-md-12">    
		<div class="card card-nav-tabs">
			<div class="card-header card-header-primary">
				<div class="nav-tabs-navigation">
					<div class="nav-tabs-wrapper">
						<ul class="nav nav-tabs" data-tabs="tabs">
							<li class="nav-item">
								<a class="nav-link active" href="#LLUVIA-v3" data-toggle="tab">
									<span style="font-size: 18px;"><i class="fab fa-android"></i></span> LLuvia V.3.1
								</a>
							</li>
							<!-- <li class="nav-item">
								<a class="nav-link" href="#crDroid-v4" data-toggle="tab">
									<span style="font-size: 18px;"><i class="fab fa-android"></i></span> crDroid Oreo
								</a> 
							</li> --> 
						</ul>
					</div>
				</div>
			</div>
			<div class="card-body ">
				<div class="tab-content text-center">
					<div class="tab-pane fade show active" id="#LLUVIA-V3">
						<div class="device-holder">
							<?php ReturnDeviceInfo('OTA', $id);?>
						</div>
					</div>
<!--					<div class="tab-pane fade" id="LLUVIA">
						<div class="device-holder">
							<?php ReturnDeviceInfo('v8.1', $id);?>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php';?>

</body>
</html>