<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>LLUVIA OS -Be Simply Awsome</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta name="description" content="official LLuviaOS website">
	<meta name="keywords" content="Lluvia, LluviaOS ROM, ROM">

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
        <h1><a href="http://lluviaos.lluvia.ga/" class="scrollto"><span>LL</span>uvia <span>OS</span></a></h1>
        <!-- Uncomment below image logo -->
        <!-- <a href="#body"><img src="img/logo.svg" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about-us">About</a></li>
          <li><a href="#screenshots">Screenshots</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero" class="wow fadeIn">
    <div class="hero-container">
      <img src="img/logo.png" alt="lluvia" height="300">  
      <h1>Welcome LLuvia OS</h1>
      <h2>LLUVIA OS is a Custom ROM developed with a major focus on system stability and useful features. All this without compromising on the pure Android experience</h2>
      <!--<img src="img/hero-img.png" alt="crdroid" height="500">-->
      <a href="dl.php" class="btn-get-started scrollto"><b>Get started with LLuvia <?php include 'handler.php'; echo lluvia_Version(); ?></b></a>
      <div class="btns">
        <a href="dl.php"><i class="fas fa-mobile-alt"></i> <?php echo GetSupportedDevices('OTA'); ?> devices officially supported</a>
        <a href="dl.php"><i class="fas fa-industry"></i> <?php echo GetSupportedOEMS('OTA'); ?> OEMs officially supported</a>
      </div>
    </div>
  </section><!-- #hero -->

  <!--==========================
    Get Started Section
  ============================-->
  <section class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>What you get?</h2>
        <p class="separator">Our focus</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-6">
          <div class="feature-block">

            <img src="img/svg/rocket.svg" alt="img" class="img-fluid">
            <h4>Security Patches</h4>
            <p>We merge latest android revisions as soon as Google releases them and we are satisfied that they do not cause unstability</p>

          </div>
        </div>

        <div class="col-md-6 col-lg-6">
          <div class="feature-block">

            <img src="img/svg/cloud.svg" alt="img" class="img-fluid">
            <h4>Tormenta</h4>
            <p>The core customization's hub written from scratch built-in to the the Settings app to provide you with a range of customizations.It Consists of tones of Customizations .</p>

          </div>
        </div>

        <div class="col-md-6 col-lg-6">
          <div class="feature-block">

            <img src="img/svg/reset.svg" alt="img" class="img-fluid">
            <h4>Bloat Free</h4>
            <p>We have removed the excess un-needed heavy apps and replaced some with a lighter version to provide a lag free experience</p>

          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="feature-block">

            <img src="img/svg/speedometer.svg" alt="img" class="img-fluid">
            <h4>Smoothness</h4>
            <p>The ROM is tweaked and optimized to provide you with a smooth and lag free experience.</p>

          </div>
        </div>
      </div>
    </div>

  </section>

  <!--==========================
    About Us Section
  ============================-->
  <section id="about-us" class="about-us padd-section wow fadeInUp">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-5 col-lg-3">
          <img src="img/IXL.png" alt="About">
        </div>

        <div class="col-md-7 col-lg-5">
          <div class="about-content">

            <h2><span>LLUVIA</span>Main highlights</h2>
            <p>Things you can customize</p>

            <ul class="list-unstyled">
              <li><i class="fa fa-angle-right"></i>Status Bar</li>
              <li><i class="fa fa-angle-right"></i>Quick Settings</li>
              <li><i class="fa fa-angle-right"></i>Lock Screen</li>
              <li><i class="fa fa-angle-right"></i>Recents Screen</li>
              <li><i class="fa fa-angle-right"></i>Navigation</li>
			  <li><i class="fa fa-angle-right"></i>Buttons</li>
			  <li><i class="fa fa-angle-right"></i>User Interface</li>
			  <li><i class="fa fa-angle-right"></i>Notifications</li>
			  <li><i class="fa fa-angle-right"></i>Misc</li>
            </ul>

          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
    Screenshots Section
  ============================-->
  <section id="screenshots" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">
        <h2>LLuvia OS Gallery</h2>
        <p class="separator">On device screenshots</p>
      </div>
    </div>

    <div class="container">
      <div class="owl-carousel owl-theme">

        <div><img src="img/screen/1.jpg" alt="img"></div>
        <div><img src="img/screen/2.jpg" alt="img"></div>
        <div><img src="img/screen/3.jpg" alt="img"></div>
        <div><img src="img/screen/4.jpg" alt="img"></div>
      </div>
    </div>

  </section>
  
  <!--==========================
    Team Section
  ============================-->
  <section id="team" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Team Member</h2>
        <p class="separator">Meet the core team</p>

      </div>
    </div>

    <div class="container">
      <div class="row">

        <div class="col-md- col-md-3 col-lg-3">
          <div class="team-block bottom">
            <img src="img/photo6118638980460292152.jpg" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="https://github.com/Anush12133"><i class="fab fa-github"></i>Anush12133</a></li>
              </ul>
              <span>Founder</span>
              <h4>Anush Madathumkara</h4>
            </div>
          </div>
        </div>

       <div class="col-md-3 col-md- col-lg-3">
          <div class="team-block bottom">
            <img src="img/photo6089030798771595431.jpg" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="https://github.com/Ram9199"><i class="fab fa-github"></i>Ram9199</a></li>
              </ul>
              <span>Founder</span>
              <h4>Sriram Prakhya</h4>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-md-3 col-lg-3">
          <div class="team-block bottom">
            <img src="img/photo1366755106253547436.jpg" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="https://github.com/Srijith2001"><i class="fab fa-github"></i>Srijith2001</a></li>
              </ul>
              <span>Co-Founder</span>
              <h4>Srijith Bharadwaj</h4>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-md-3 col-lg-3">
          <div class="team-block bottom">
            <img src="img/photo2351760303168006100.jpg" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fab fa-github"></i>Alex Besida</a></li>
              </ul>
              <span>Designer</span>
              <h4>Alex Besida</h4>
            </div>
          </div>
        </div>

      </div><br>
        
      <div class="row">

        <div class="col-md- col-md-3 col-lg-3">
          <div class="team-block bottom">
            <img src="img/photo1662388515669911518.jpg" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fab fa-github"></i>AdvertPavan</a></li>
              </ul>
              <span>Designer</span>
              <h4>Pavan Patel</h4>
            </div>
          </div>
        </div>

       <div class="col-md-3 col-md- col-lg-3">
          <div class="team-block bottom">
            <img src="img/photo706726346343164240.jpg" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fab fa-github"></i>ISayedSajid</a></li>
              </ul>
              <span>Developer</span>
              <h4>Sayed Sajid</h4>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-md-3 col-lg-3">
          <div class="team-block bottom">
            <img src="img/photo2464989148762712244.jpg" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fab fa-github"></i>ShanuFlash</a></li>
              </ul>
              <span>Bot-Manager</span>
              <h4>ShanuFlash</h4>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-md-3 col-lg-3">
          <div class="team-block bottom">
            <img src="img/photo2205322272224421857.jpg" class="img-responsive" alt="img">
            <div class="team-content">
              <ul class="list-unstyled">
                <li><a href="#"><i class="fab fa-github"></i>Aryanta And</a></li>
              </ul>
              <span>Developer</span>
              <h4>Aryanta Andi</h4>
            </div>
          </div>
        </div>

      </div>        
    </div>
  </section>

<?php include 'footer.php';?>

</body>
</html>
