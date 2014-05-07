<!DOCTYPE html>
<html>
<head>
	<title></title>
<script type="text/javascript" src="http://platform.linkedin.com/in.js">
  api_key: 77d9vq4le4equl
  onLoad: onLinkedInLoad
  authorize: true
</script>
<script type="text/javascript">
  // 2. Runs when the JavaScript framework is loaded
  function onLinkedInLoad() {
    IN.Event.on(IN, "auth", onLinkedInAuth);
  }

  // 2. Runs when the viewer has authenticated
  function onLinkedInAuth() {
    IN.API.Profile("me", "url=http://www.linkedin.com/in/jakobheuser")
    	.fields("firstName", "lastName", "industry")
    	.result(displayProfiles);
  }

  // 2. Runs when the Profile() API call returns successfully
  function displayProfiles(profiles) {
    // member = profiles.values[0];
    // document.getElementById("profiles").innerHTML = 
    //   "<p id=\"" + member.id + "\">Hello " +  member.firstName + " " + member.lastName + " who works in " + member.industry + "</p>";
      var profilesDiv = document.getElementById("profiles");
      var members = profiles.values;
	  for (var member in members) {
	    profilesDiv.innerHTML += "<p>" + members[member].firstName + " " + members[member].lastName 
      + " works in the " + members[member].industry + " industry.";
 		 }
	  }
 
</script>
</head>
<body>
	<!-- 3. Displays a button to let the viewer authenticate -->
<script type="IN/Login"></script>

<!-- 4. Placeholder for the greeting -->
<div id="profiles"></div>
</body>
</html>