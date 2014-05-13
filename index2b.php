<?php include 'inc/alum-list.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta name="viewport" content="width=device-width, user-scalable=no">
<!-- <script src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
<script type="text/javascript" src="http://platform.linkedin.com/in.js">
  api_key: 77xvbxmy0e12xv
  // onLoad: onLinkedInLoad
  authorize: true
</script>


</head>
<body>
	<!-- 3. Displays a button to let the viewer authenticate -->
<script type="IN/Login"></script>

<!-- 4. Placeholder for the greeting -->
<div id="profiles">

</div>

<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>


<div class="person">
<script type="IN/MemberData" data-ids="http://www.linkedin.com/in/dbuczek/" data-fields="id, firstName, lastName, pictureUrl, publicProfileUrl, headline, location:(name), threeCurrentPositions:(title,company:(name)), threePastPositions:(title,company:(name))">
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
      <?js= $(key).headline ?>
      <?js= $(key).location.name ?>
      <?js for (var i = 0; i < threeCurrentPositions.values.length; i++) { ?>
      	<?js= $(key).threeCurrentPositions.values[i].title ?> at <?js= $(key).threeCurrentPositions.values[i].company.name ?>;
      <?js }; ?>
      Current Position 1: <?js= $(key).threeCurrentPositions.values[0].title ?> at <?js= $(key).threeCurrentPositions.values[0].company.name ?><br />
      Current Position 2: <?js= $(key).threeCurrentPositions.values[1].title ?> at <?js= $(key).threeCurrentPositions.values[1].company.name ?><br />
      Past Position 1: <?js= $(key).threePastPositions.values[0].title ?> at <?js= $(key).threePastPositions.values[0].company.name ?><br />
	  </li>
	  <?js } ?>
	</ul>
</script>
</div>



</body>
</html>