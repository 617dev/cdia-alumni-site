<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://platform.linkedin.com/in.js">
  api_key: 77d9vq4le4equl
</script>
</head>
<body>
<?php if ((isset($_SESSION['loggedIn']) && ($_SESSION['loggedIn'] == 'Yes'))) { ?>

<h1>Logged In!</h1>

<script type="IN/MemberData" data-ids="<?= $_SESSION['userID']; ?>" data-fields="id, firstName, lastName, pictureUrl, publicProfileUrl">
<ul>
  <?js for (var key in $("*")) { ?>
  <li>
    <a href="<?js= $(key).publicProfileUrl ?>">
      <?js if ($(key).pictureUrl) { ?>
        <img src="<?js= $(key).pictureUrl ?>"></img>
      <?js } ?>
      <?js= $(key).firstName ?>
      <?js= $(key).lastName ?>
    </a>
  </li>
  <?js } ?>
</ul>
</script>


<?php } else { ?> 
<script type="IN/Login" data-onAuth="OnLinkedInAuth">
</script>
<?php } ?>
</body>
</html>

<!-- below is the code that will need to go on our home page -->
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
    var companies = [];
    var titles = [];
    var jobs = member.threeCurrentPositions._total;
    for (var i = 0; i < jobs; i++) {
      companies.push(member.threeCurrentPositions.values[i].company.name);
      titles.push(member.threeCurrentPositions.values[i].title);
    }
    // get current positions and create arrays for companies and titles
    var pastCompanies = [];
    var pastTitles = [];
    var pastJobs = member.threePastPositions._total;
    for (var j = 0; j < pastJobs; j++) {
      pastCompanies.push(member.threePastPositions.values[j].company.name);
      pastTitles.push(member.threePastPositions.values[j].title);
    }
    // make an ajax call to login/register/update the user
    var str='linkedinID=' + id + '&profileURL=' + profileUrl + '&firstName=' + firstName + '&lastName=' + lastName + '&pictureURL=' + pictureURL + '&location=' + userLocation + '&email=' + email + '&companies=' + companies + '&titles=' + titles + '&pastCompanies=' + pastCompanies + '&pastTitles=' + pastTitles;

    $.post('checkUser.php', str, function(data) {
        alert(data);
        location.reload();       
    });   
  };
</script>