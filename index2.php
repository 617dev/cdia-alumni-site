<?php include 'inc/alum-list.php' ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta name="viewport" content="width=device-width, user-scalable=no">
<!-- <script src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
<script type="text/javascript" src="http://platform.linkedin.com/in.js">
  // api_key: 77qe2rbp52uoxz
  // onLoad: onLinkedInLoad
  // authorize: true
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

<style>
  .person {
    position: relative;
    float: left;
    min-height: 200px;
    display: inline-block;
  }

  .portfolio {
    position: absolute;
    top: 108px;
    right: 20px;
    height: 16px;
  }

  .btn-primary, .btn-new-primary, .btn-secondary, .btn-new-secondary, .btn-tertiary, .btn-ternary, .btn-quaternary, .btn-action {
    font-family: helvetica, arial, sans-serif;
    border-width: 1px;
    border-style: solid;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    cursor: pointer;
    font-size: 12px;
    line-height: 1.35;
    margin: 0;
    overflow: visible;
    padding: 3px 10px 2px;
    text-decoration: none !important;
    vertical-align: top;
    width: auto;
  }

 .btn-ternary, .btn-menu-open.btn-ternary, .btn-split.btn-ternary:hover {
    background: #CDE5F0;
    background: -moz-linear-gradient(top, #eef7fa 0, #eef7fa 1px, #dcedf5 1px, #cde5f0 100%);
    background: -o-linear-gradient(top, #eef7fa 0, #eef7fa 1px, #dcedf5 1px, #cde5f0 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #eef7fa), color-stop(5%, #eef7fa), color-stop(5%, #dcedf5), color-stop(100%, #cde5f0));
    background: linear-gradient(top, #eef7fa 0%,#eef7fa 1px,#dcedf5 1px,#cde5f0 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#DCEDF5', endColorstr='#CDE5F0',GradientType=0 );
    border-color: #a3cfe4;
    color: #069 !important;
  }
</style>

</body>
</html>