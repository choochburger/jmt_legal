<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
      body {
          padding-top: 60px;
          padding-bottom: 40px;
      }
    </style>
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link href='http://fonts.googleapis.com/css?family=Signika' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">

    <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
  </head>
  <body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">The Law Office of John M. Trani</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="#practice-areas">Practice Areas/Service</a></li>
              <li><a href="#profile">Profile</a></li>
              <li><a href="#clients">Clients</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">


      <div class="section" id="home" style="display: none">
        <?php include 'home.html' ?>
        <?php include 'shared/social-networks.html' ?>
        <div class="row">
          <div class="span12 center">
          </div>
        </div>
      </div>
      <div class="section" id="practice-areas" style="display: none">
        <?php include 'practice_areas.html' ?>
      </div>
      <div class="section" id="profile" style="display: none">
        <?php include 'profile.html' ?>
      </div>
      <div class="section" id="clients" style="display: none">
        <?php include 'clients.html' ?>
      </div>
      <div class="section" id="contact" style="display: none">
        <?php include 'contact.html' ?>
        <?php include 'shared/social-networks.html' ?>
      </div>

      <footer class="center">
          <p>170 State Street, #2E | Brooklyn, NY 11201 | Phone: 347.549.4115 | E-mail: <a href="mailto:info@jmt-legal.com">info@jmt-legal.com</a></p>
          <p>&copy; JMT Legal 2012</p>
      </footer>

    </div> <!-- /container -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.1.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-15530414-1']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
  </body>
</html>
