<?php include 'inc/alum-list.php' ?>

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

    <script type="text/javascript" src="http://platform.linkedin.com/in.js">
      api_key: 77qe2rbp52uoxz
      // onLoad: onLinkedInLoad
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
          <a class="navbar-brand" href="index.html"><img src="img/bu_logo.png"/> Center for Digital Imaging Arts</a>
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" class="form-control">
            </div>
            <button type="submit" class="btn btn-danger">Search</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

<div class="container" style="padding-top: 80px">
  
  <?php foreach ($alums as $alum): ?>

<div class="person">
  <script type="IN/MemberProfile" data-id="<?php echo $alum ?>" data-format="inline" data-related="false"></script>
  <a class="portfolio btn-ternary" href="http://www.cccpdesign.com">Portfolio</a>
</div>

<?php endforeach ?>

</div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
  </body>
</html>
