<?php include 'inc/alum-list.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<script type="text/javascript" src="http://platform.linkedin.com/in.js">
  api_key: 77d9vq4le4equl
  onLoad: onLinkedInLoad
  authorize: true
</script>

</head>
<body>
	<!-- 3. Displays a button to let the viewer authenticate -->
<script type="IN/Login"></script>

<!-- 4. Placeholder for the greeting -->
<div id="profiles">

</div>

<?php foreach ($alums as $alum): ?>

<script type="IN/MemberData" data-ids="<?php echo $alum; ?>" data-fields="id, firstName, lastName, headline, pictureUrl, publicProfileUrl, industry">
<div>
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
      <?js= $(key).headline ?>,
      Industry: <?js= $(key).industry ?>
    </li>
    <?js } ?>
  </ul>
</div>
</script>

<?php endforeach ?>

</body>
</html>