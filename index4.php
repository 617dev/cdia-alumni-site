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
<script type="text/javascript">
  function OnLinkedInAuth() {
    IN.API.Profile("me").fields("id", "publicProfileUrl", "firstName", "lastName", "pictureUrl", "location:(name)", "emailAddress").result(getLoginData);
  };

  function getLoginData(profiles) {
    var member = profiles.values[0];
    var id=member.id;
    var profileUrl=member.publicProfileUrl;
    var firstName=member.firstName;
    var lastName=member.lastName;
    var userLocation=member.location.name;
    var pictureURL=member.pictureUrl;
    var email=member.emailAddress;

    var str='linkedinID=' + id + '&profileURL=' + profileUrl + '&firstName=' + firstName + '&lastName=' + lastName + '&pictureURL=' + pictureURL + '&location=' + userLocation + '&email=' + email;

    $.post('checkUser.php', str, function(data) {
        alert(data);
        location.reload();       
    });
   
  };
</script>