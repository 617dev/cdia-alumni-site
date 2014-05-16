<?php session_start(); ?>
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
    <link href="bootstrap-3.1.1-dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="bootstrap-3.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script type="text/javascript" src="http://platform.linkedin.com/in.js"/>
       api_key: 77d9vq4le4equl
       authorize: true
       onLoad: onLinkedInLoad

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
          <a class="navbar-brand" href="index.php"><img src="img/bu_logo.png"/> Center for Digital Imaging Arts | <span style="color:white; font-size: 12px;">beta site</span></a>
        </div>
        <div class="navbar-collapse collapse">
           <ul class="nav navbar-nav" style="float:right">
              <li><a href="profiles.php">View Alumni Profiles</a></li>
              <li><a href="about.html">About this project</a></li>
              <li><a href="terms.html">Terms of service</a></li>
           </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container" style="padding-top: 30px">
        <div class="row">
        <div class="col-md-6">
          <div class="photos">
            <img src="img/profile_3.jpg" alt="profile_3" class="img-thumbnail">
            <img src="img/profile_2.jpg" alt="profile_2" class="img-thumbnail">
            <img src="img/profile_4.jpg" alt="profile_4" class="img-thumbnail">
            <img src="img/profile_1.jpg" alt="profile_1" class="img-thumbnail">
            <img src="img/profile_3.jpg" alt="profile_3" class="img-thumbnail">
            <img src="img/profile_2.jpg" alt="profile_2" class="img-thumbnail">
            <img src="img/profile_4.jpg" alt="profile_4" class="img-thumbnail">
            <img src="img/profile_1.jpg" alt="profile_1" class="img-thumbnail">
            <img src="img/profile_1.jpg" alt="profile_1" class="img-thumbnail">
          </div>
          <div class="hidephotos">
            <img src="img/profile_3.jpg" alt="profile_3" class="img-thumbnail">
            <img src="img/profile_2.jpg" alt="profile_2" class="img-thumbnail">
            <img src="img/profile_4.jpg" alt="profile_4" class="img-thumbnail">
            <img src="img/profile_1.jpg" alt="profile_1" class="img-thumbnail">
            <img src="img/profile_2.jpg" alt="profile_2" class="img-thumbnail">
            <img src="img/profile_4.jpg" alt="profile_4" class="img-thumbnail">
            <img src="img/profile_1.jpg" alt="profile_1" class="img-thumbnail">
          </div>
        </div>
        <div class="col-md-5"> <h1>Connect with CDIA alumni</h1>
      <?php if (!(isset($_SESSION['loggedIn']) && ($_SESSION['loggedIn'] == 'Yes'))) { ?>
        <h2>Sign up now!</h2>
         
        <form class="form-horizontal" role="form" id="login">

          <div class="form-group">
            <div class="col-sm-10">
              
              <div class="focus">
                <button type="submit" class="disabled btn btn-danger sign-in" disabled>Sign in with linkedIn</button>
              </div>

              <div class="linkedIn-button" style="display:none;">
                <script type="in/Login" data-onAuth="OnLinkedInAuth">
                  Hello, <?js= firstName ?> <?js= lastName ?>.
                  
                </script>

                <script>
                  function onLinkedInLoad() { 
                    $('.IN-widget a').html('<button type="submit" class="btn btn-danger sign-in">Sign in with linkedIn</button>');
                  }
                </script>
              </div>

              <div class="checkbox">
                <label>
                  <strong>You must accept our terms of use to enable the sign in button.</strong> <br/>
                  <input id="terms" type="checkbox"> Yes, I have read and accept the <a href="terms.html">CDIABU Alumni terms of use</a>
                </label>
              </div>

            </div>
           </div>
        </form>

        <?php } else {
          echo "<h3>Welcome " . $_SESSION['userName'] . "!</h3>";
        } ?>
      </div>
    </div>
  </div>
</div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Boston Web Tech Market</h2>
          <p>Expertise in these three areas will be much sought-after by IT hiring managers this year:</span><br />
<ul>
<li><span style="font-family: Arial,Helvetica,sans-serif;">web development</span></li>
<li><span style="font-family: Arial,Helvetica,sans-serif;">mobile development</span></li>
<li><span style="font-family: Arial,Helvetica,sans-serif;">large-scale analysis</span></li>
</ul>
<span style="font-family: Arial,Helvetica,sans-serif;">
According to <a href="http://www.linkedin.com/in/dougschade" target="_blank">Doug Schade</a> -- #5 on the <a href="http://beantownweb.blogspot.com/2014/01/bostons-rockstar-recruiters-q1-2014.html">Boston Rockstar Recruiter list</a> -- employers are especially interested in Web developers who know open source 
languages such as Java, Ruby and Python.&nbsp; He adds that Microsoft languages are being de-emphasized. Additional details are available at <a href="http://www.cio.com/article/745784/Hot_IT_Job_Skills_in_2014_Mobile_Web_Development_and_Big_Data" target="_blank">Hot IT Job Skills in 2014</a>.</span></p>
          <p><a class="btn btn-default" href="http://beantownweb.blogspot.com/2014/03/boston-web-tech-job-market-q1-2014.html" role="button">Read more &raquo;</a></p>
        </div>
        <div class="col-md-8">
          <h2>Boston's Rockstar Recruiters</h2>
          <p>In the fall of 2012 Beantown Web asked the question, "Who are Boston's Rockstar Recruiters?"  Welcome to the sixth installment of The List.

To begin the quest, Beantown Web identified more than 400 technology recruiters via LinkedIn.  Most are located in the Boston area.  Some are located in New Hampshire and Rhode Island and conduct a significant amount of business in the Boston area.

Beantown Web then turned to LinkedIn to identify customer satisfaction scores.  In particular, how many people were willing to provide a public recommendation for that recruiter?

Football teams have Super Bowl trophies.  Mark Spitz has Olympic Gold Medals.  The rest of us mere mortals have to make due with recommendations.</p>
<p>If you are aware of a Boston-based Technology Recruiter who has garnered at least seven LinkedIn recommendations, go to <a href="https://www.facebook.com/beantownweb">Beantown Web's Facebook page</a> and share your Rockstar Recruiter selection with our readers.  Rock on!</p>
          <p><a class="btn btn-default" href="http://beantownweb.blogspot.com/2014/01/bostons-rockstar-recruiters-q1-2014.html" role="button">Read more &raquo;</a></p>
       </div>
      </div>

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
 <script type="text/javascript">
  //this script runs after the user has successfully used 'Log In With LinkedIn'
  function OnLinkedInAuth() {
    IN.API.Profile("me").fields(["id", "publicProfileUrl", "firstName", "lastName", "pictureUrl", "location:(name)", "emailAddress", "threeCurrentPositions:(title,company)", "threePastPositions:(title,company)"]).result(getLoginData);
  };
  
  function getLoginData(profiles) {
    //put data we pulled into variables to be posted to the login function
    var member = profiles.values[0];
    var id=member.id;
    var profileUrl=member.publicProfileUrl;
    var firstName=member.firstName;
    var lastName=member.lastName;
    var userLocation=member.location.name;
    var pictureURL=member.pictureUrl;
    var email=member.emailAddress;
    // get current positions and create arrays for companies and titles
    var current=JSON.stringify(member.threeCurrentPositions);
    var past=JSON.stringify(member.threePastPositions);

    var str='linkedinID=' + id + '&profileURL=' + profileUrl + '&firstName=' + firstName + '&lastName=' + lastName + '&pictureURL=' + pictureURL + '&location=' + userLocation + '&email=' + email + '&current=' + current + '&past=' + past;

    $.post('db/checkUser.php', str, function(data) {
        if (data = "access granted") {
          window.location.replace("profiles.php");
        } else {
          alert("We do not have a record of you being a CDIA alumnus.")
        }
        //alert(data);
    });   
  };
</script>

<script>
  $("#terms").click(function() {
      if (this.checked==true) {
        $("button.disabled").hide();
        $(".linkedIn-button").show();
      } else {
        $("button.disabled").show();
        $(".linkedIn-button").hide();
      } 
  })

  $(".focus").click(function() {
    $("#terms").focus();
  });
</script>