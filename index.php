<?php 
      session_start(); 
      include ('inc/header.php');
?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container" style="padding-top: 30px">
        <div class="row">
        <div class="col-md-5">
          <div class="photos">
            <img src="img/profile_3.jpg" alt="profile_3" class="img-thumbnail">
            <img src="img/profile_2.jpg" alt="profile_2" class="img-thumbnail">
            <img src="img/profile_4.jpg" alt="profile_4" class="img-thumbnail">
            <img src="img/profile_1.jpg" alt="profile_1" class="img-thumbnail">
            <img src="img/profile_5.jpg" alt="profile_5" class="img-thumbnail">
            <img src="img/profile_6.jpg" alt="profile_6" class="img-thumbnail">
            <img src="img/profile_8.jpg" alt="profile_8" class="img-thumbnail">
            <img src="img/profile_7.jpg" alt="profile_7" class="img-thumbnail">
            <img src="img/profile_9.jpg" alt="profile_9" class="img-thumbnail">
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

        <div class="col-md-5">

         <h1>Connect with CDIA alumni</h1>

        </div> 

        <div class="col-md-7">
        
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
                    $('.IN-widget a').html('<button type="submit" class="btn btn-success sign-in">Sign in with linkedIn</button>');
                  }
                </script>
              </div>

              <div class="checkbox">
                <label>
                  <strong>You must accept our terms of use to enable the sign in button.</strong> <br/>
                  <input id="terms" type="checkbox"> Yes, I have read and accept the <a href="terms.php">CDIA Alumni terms of use</a>
                </label>
              </div>

            </div>
           </div>
        </form>

        <?php } else { ?>

          <h3>Welcome <?php echo $_SESSION['userName'] ?>!</h3>
        
          
          <button class="sign-out btn btn-danger sign-in">Sign out</button>
          
          <script>

          function onLinkedInLoad() { 

            $('.sign-out').click(function(event) {
              IN.User.logout(onLogOut);

              function onLogOut(){
                $.get('db/killsession.php', function(){
                  // alert('session killed');
                  window.location.href = window.location.href;
                }); 
              }
            });
          }
          </script>

        <?php } ?>
        
      </div>
    </div>
  </div>
</div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
			<h2>Boston Web Tech Market</h2>
			<p>"Employment for technology professionals continues to thrive, yet this rising tide of job opportunities for tech pros has not lifted the prospects for all skillsets equally."</p>
			<p><a class="btn btn-default" href="http://beantownweb.blogspot.com/2014/10/boston-web-tech-job-market-q4-2014.html" role="button" target="_blank">Read more &raquo;</a></p>
			<p>CDIA Alumni gain access to a proprietary database of the Top 100 Web Technologies in Boston.</p>

        </div>
        <div class="col-md-8">
			<h2>Boston's Rockstar Recruiters</h2>
			<p>In the fall of 2012 Beantown Web asked the question, "Who are Boston's Rockstar Recruiters?"  Welcome to the ninth installment of The List.  To begin the quest, Beantown Web identified more than 400 technology recruiters via LinkedIn.  Most are located in the Boston area.  Some are located in New Hampshire and Rhode Island and conduct a significant amount of business in the Boston area.</p>
			<p><a class="btn btn-default" href="http://beantownweb.blogspot.com/2015/01/bostons-rockstar-recruiters-q1-2015.html" role="button" target="_blank">Read more &raquo;</a></p>
			<p>CDIA Alumni gain access to a proprietary database of the the Top 100 Technology Recruiters in Boston.</p>
       </div>
      </div>

      <hr>

  <?php include 'inc/footer.php'; ?>

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