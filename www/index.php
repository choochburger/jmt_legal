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

    <script type="text/javascript" src="//use.typekit.net/unj1qih.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/flat-ui.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>

  </head>
  <body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->
    <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <div class="row" id="hero">
            <h1 class="flexible">
              The Law Office of John M. Trani
            </h1>
            <h4 class="flexible">
              170 State Stree, #2E Brooklyn, NY 11201 | 347-549-4115 | info@jmt-legal.com
            </h4>
            <p>
            <ul class="nav-center">
              <li style="padding-left: 0;"><a href="#practice-areas">Practice Areas</a></li>
              <li><a href="#profile">Profile</a></li>
              <li><a href="#clients">Clients</a></li>
              <li style="padding-right: 0;"><a href="mailto: info@jmt-legal.com">Contact</a></li>
            </ul>
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">


      <div class="section" id="home">
        <?php include 'home.php' ?>
        <div class="row">
          <div class="span12 center">
          </div>
        </div>
      </div>
      <div class="section" id="practice-areas">
        <?php include 'practice_areas.php' ?>
      </div>
      <div class="section" id="profile">
        <?php include 'profile.php' ?>
      </div>
      <div class="section" id="clients">
        <?php include 'clients.php' ?>
      </div>

      <footer>
          <p>170 State Street, #2E | Brooklyn, NY 11201 | (347) 549-4115 | <a href="mailto:info@jmt-legal.com">info@jmt-legal.com</a></p>
          <p>The Law Office of John M. Trani PLLC &copy; All rights reserved. Attorney advertising.</p>
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
