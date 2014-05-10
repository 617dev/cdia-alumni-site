<?php include 'inc/alum-list.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta name="viewport" content="width=device-width, user-scalable=no">
<!-- <script src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
<script type="text/javascript" src="http://platform.linkedin.com/in.js">
  api_key: 77qe2rbp52uoxz
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

<?php foreach ($alums as $alum): ?>

<div class="person">
  <script type="IN/MemberProfile" data-id="<?php echo $alum ?>" data-format="inline" data-related="false"></script>
  <a class="portfolio btn-ternary" href="http://www.cccpdesign.com">Portfolio</a>
</div>

<?php endforeach ?>

</body>
</html>