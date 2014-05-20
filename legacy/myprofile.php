<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="CDIABU Alumni">
    <meta name="author" content="CDIABU Alumni">
    <link rel="shortcut icon" href="favicon.ico">
    <title>CDIABU Alumni</title>
    <link href="bootstrap-3.1.1-dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script type="text/javascript" src="http://platform.linkedin.com/in.js"/>
       api_key: 77d9vq4le4equl
       authorize: true
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
          <a class="navbar-brand" href="index.php"><img src="img/bu_logo.png"/> Center for Digital Imaging Arts | <span style="color:white">Beta site</span></a>
        </div>
        <div class="navbar-collapse collapse">
         <ul class="nav navbar-nav" style="float:right">
              <li><a href="profiles.php">View Alumni Profiles</a></li>
              <li><a href="myprofile.php">My Profile</a></li>
              <li><a href="about.html">About This Project</a></li>
              <li><a href="terms.html">Terms of Service</a></li>
           </ul>
         <!--  <p><script type="in/Login">
                      Hello, <?js= firstName ?> <?js= lastName ?>.
                    </script></p> -->
        </div><!--/.navbar-collapse -->
      </div><!-- end of container -->
    </div><!-- end of navbar -->
    
    <div class="container" style="padding-top: 60px">
      <style>
        h1 {
          margin-left: 12px;
        }
      </style>
        <div class="row">
          <div class="col-md-12">
            <h1>My Profile</h1>
          </div>
        </div><!-- end of col-md-12 -->
    </div>

    <div class="container">
          <form class="form-horizontal" role="form">
            <div class="form-group">
                <label for="PortfolioURL" class="col-sm-2 control-label">Portfolio URL</label>
                <div class="col-sm-10">
                  <input type="url" id="PortfolioURL" class="form-control"
                  placeholder="Portfolio URL" name="PortfolioURL"/>
                </div>
            </div>

            <div class="form-group">
                <label for="certificate" class="col-sm-2 control-label">Certificate Type</label>
                <div class="col-sm-10">
                  <select id="certificate" class="form-control" required>
                    <option></option>
                    <option value="graphic">Graphic Design</option>
                    <option value="graphicweb">Graphic + Web Design</option>
                    <option value="web">Web Development</option>
                  </select>
                </div>
            </div>

            <div class="form-group">
                <label for="gradyear" class="col-sm-2 control-label">Year of Graduation</label>
                <div class="col-sm-10">
                  <select id="gradyear" class="form-control" required>
                    <option></option>
                    <option value="2014">2014</option>
                    <option value="2013">2013</option>
                    <option value="2012">2012</option>
                    <option value="2011">2011</option>
                    <option value="2010">2010</option>
                    <option value="2009">2009</option>
                    <option value="2008">2008</option>
                    <option value="2007">2007</option>
                    <option value="2006">2006</option>
                  </select>
                </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="schedule">Schedule</label>
              <div class="col-sm-10">
                <div class="radio">
                  <label>
                    <input type="radio" name="schedule" id="schedule-0" value="Full-Time" checked>
                    Full-Time
                  </label>
                </div>
                <div class="radio">
                  <label>
                    <input type="radio" name="schedule" id="schedule-1" value="Part-Time">
                    Part-time
                  </label>
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-danger col-sm-offset-2">Submit</button>


            </form>

      <hr>

      <footer>
        <div class="row">
        <div class="col-md-4">
        <p>&copy; CDIABU Alumni Association 2014</p>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
  </body>
</html>
