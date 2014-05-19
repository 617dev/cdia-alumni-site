<?php
  session_start();
  include 'db/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="CDIABU Alumni">
    <meta name="author" content="CDIABU Alumni">
    <link rel="shortcut icon" href="favicon.ico">
    <title>CDIA BU Alumni</title>
    <link rel="stylesheet" href="css/reset.css">
    <link href="bootstrap-3.1.1-dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script>

    $(function(){
      $("#filter").keyup(function(){
    
        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val(), count = 0;
    
        // Loop through the comment list
        $(".results .blog-post").each(function(){
    
            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();
    
            // Show the list item if the phrase matches and increase the count by 1
            } else {
                $(this).show();
                count++;
            }
        });
    
        // Update the count
        if (count == 1) {
          $("#filter-count").text(count+" Search Result");
        } else {
          $("#filter-count").text(count+" Search Results");
        }
      });
    })

    </script>

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="img/bu_logo.png"/> Center for Digital Imaging Arts | <span class="beta">Beta site</span></a>
        </div>
        <div class="navbar-collapse collapse">
         <ul class="nav navbar-nav" style="float:right">
              <li><a href="profiles.php">View Alumni Profiles</a></li>
              <li><a href="about.html">About this project</a></li>
              <li><a href="terms.html">Terms of service</a></li>
           </ul>
        <!--   <p><script type="in/Login">
                      Hello, <?js= firstName ?> <?js= lastName ?>.
                    </script></p> -->
        </div><!--/.navbar-collapse -->
      </div><!-- end of container -->
    </div><!-- end of navbar -->

<div class="container" style="padding-top: 80px">

      <div class="blog-header">
        <h1 class="blog-title">Web Design and Development Alumni</h1>
         <form id="live-search" role="form" class="form-inline" action="" method="post">
            <div class="form-group">
              <label for="searchbox">Search Alumni</label>
              <input type="text" class="form-control" placeholder="" id="filter" value="">
            </div>
            <!-- <button type="submit" class="btn btn-danger">Search</button> -->
            <span id="filter-count"></span>
        </form>
      </div>
<?php if ((isset($_SESSION['loggedIn']) && ($_SESSION['loggedIn'] == 'Yes'))) { ?>
      <div class="row">

        <div class="col-sm-8 blog-main results">
          <hr>
          <?php getProfiles(); ?>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar" style="border-left:1px solid gray">
    <!--       <div class="sidebar-module sidebar-module-inset">
            <h4>Graduating</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div> -->
          <div class="sidebar-module">
            <h2 class="brickred">Recent Graduates</h2>
            <h3>February 2014</h3>
            <hr>
            <h4 style="padding-bottom:10px">Web Development, Part-Time</h4>
            <ol class="list-unstyled">
              <li>
                <p class="listname">Kelly Cross</p>
                <a href="#">
                  <img src="img/LinkedinIcon.png" style="width:20px"/></a>
                <a href="#">Portfolio</a>
              </li>
              <li>
                <p class="listname">Chris Lamothe</p>
                <a href="#">
                  <img src="img/LinkedinIcon.png" style="width:20px"/></a>
                <a href="#">Portfolio</a>
              </li>
              <li>
                <p class="listname">Danielle Buczek</p>
                <a href="#">
                  <img src="img/LinkedinIcon.png" style="width:20px"/></a>
                <a href="#">Portfolio</a></li>
              <li>
                <p class="listname">Alex Rosenthal</p>
                <a href="#">
                  <img src="img/LinkedinIcon.png" style="width:20px"/></a>
                <a href="#">Portfolio</a>
              </li>
            </ol>
            <hr>
            <h4 style="padding-bottom:10px">Web Development, Full-Time</h4>
            <ol class="list-unstyled">
              <li>
                <p class="listname">Kelly Cross</p>
                <a href="#">
                  <img src="img/LinkedinIcon.png" style="width:20px"/></a>
                <a href="#">Portfolio</a>
              </li>
              <li>
                Chris Lamothe
                <a href="#">
                  <img src="img/LinkedinIcon.png" style="width:20px"/></a>
                <a href="#">Portfolio</a>
              </li>
              <li>
                Danielle Buczek
                <a href="#">
                  <img src="img/LinkedinIcon.png" style="width:20px"/></a>
                <a href="#">Portfolio</a></li>
              <li>
                Alex Rosenthal
                <a href="#">
                  <img src="img/LinkedinIcon.png" style="width:20px"/></a>
                <a href="#">Portfolio</a>
              </li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h2 class="brickred">Future Graduates</h2>
            <h3>June 2014</h3>
            <h4>Web Development, Part-Time</h4>
            <ol class="list-unstyled">
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
            </ol>
            <hr>
            <h4>Web Development, Full-Time</h4>
            <ol class="list-unstyled">
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
              <li><a href="#">March 2013</a></li>
              <li><a href="#">February 2013</a></li>
            </ol>
            <h3>September 2014</h3>
            <h4>Web Development, Part-Time</h4>
            <ol class="list-unstyled">
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
            </ol>
            <hr>
            <h4>Web Development, Full-Time</h4>
            <ol class="list-unstyled">
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
              <li><a href="#">March 2013</a></li>
              <li><a href="#">February 2013</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->
      <?php } else { ?>
          <h3>Sorry, but you must be logged in to access this page.</h3>
          <h3>Please return <a href="index.php">here</a> to log in with you LinkedIn credentials.</h3>
          <br><br><br><br>
      <?php } ?>
          <hr>

      <footer>
        <div class="row">
        <div class="col-md-4">
        <p>&copy; CDIABU 2014</p>
        </div>
        <div class="col-md-4">
        <p><a href="http://beantownweb.blogspot.com/2014/03/boston-web-tech-job-market-q1-2014.html">Boston Web Tech Market</a></p>
        </div>
        <div class="col-md-4">
        <p><a href="http://beantownweb.blogspot.com/2014/01/bostons-rockstar-recruiters-q1-2014.html">Boston's Rockstar Recruiters</a></p>
        </div>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
  </body>
</html>
