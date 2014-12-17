<?php
  session_start();
  include 'db/functions.php';
  include 'inc/header.php';
?>
<script src="js/search.js"></script>

<div class="container" style="padding-top: 80px">

      <div class="blog-header">
        <h1 class="blog-title">Web Design and Development Alumni</h1>
         <form id="live-search" role="form" class="form-inline" action="" method="post">
            <div class="form-group">
              <label for="searchbox">Search Alumni</label>
              <input type="text" class="form-control" placeholder="" id="filter" value="">
            </div>
            <!-- <button type="submit" class="btn btn-danger">Search</button> -->
            <span id="filter-count"></span>
        </form>
      </div>
<?php if ((isset($_SESSION['loggedIn']) && ($_SESSION['loggedIn'] == 'Yes'))) { ?>
      <div class="row">

        <div class="col-sm-8 blog-main results">
          <hr>
          <?php getProfiles(); ?>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar" style="border-left:1px solid gray">
    <!--       <div class="sidebar-module sidebar-module-inset">
            <h4>Graduating</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
          </div> -->
          <div class="sidebar-module">
            <h2 class="brickred">Recent Graduates</h2>
            <h3>February 2014</h3>
            <hr>
            <h4 style="padding-bottom:10px">Web Development, Part-Time</h4>
            <ol class="list-unstyled">
              <li>
                <p class="listname">Kelly Cross</p>
                <a href="#">
                  <img src="img/LinkedinIcon.png" style="width:20px"/></a>
                <a href="#">Portfolio</a>
              </li>
              <li>
                <p class="listname">Chris Lamothe</p>
                <a href="#">
                  <img src="img/LinkedinIcon.png" style="width:20px"/></a>
                <a href="#">Portfolio</a>
              </li>
              <li>
                <p class="listname">Danielle Buczek</p>
                <a href="#">
                  <img src="img/LinkedinIcon.png" style="width:20px"/></a>
                <a href="#">Portfolio</a></li>
              <li>
                <p class="listname">Alex Rosenthal</p>
                <a href="#">
                  <img src="img/LinkedinIcon.png" style="width:20px"/></a>
                <a href="#">Portfolio</a>
              </li>
            </ol>
            <hr>
            <h4 style="padding-bottom:10px">Web Development, Full-Time</h4>
            <ol class="list-unstyled">
              <li>
                <p class="listname">Kelly Cross</p>
                <a href="#">
                  <img src="img/LinkedinIcon.png" style="width:20px"/></a>
                <a href="#">Portfolio</a>
              </li>
              <li>
                Chris Lamothe
                <a href="#">
                  <img src="img/LinkedinIcon.png" style="width:20px"/></a>
                <a href="#">Portfolio</a>
              </li>
              <li>
                Danielle Buczek
                <a href="#">
                  <img src="img/LinkedinIcon.png" style="width:20px"/></a>
                <a href="#">Portfolio</a></li>
              <li>
                Alex Rosenthal
                <a href="#">
                  <img src="img/LinkedinIcon.png" style="width:20px"/></a>
                <a href="#">Portfolio</a>
              </li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h2 class="brickred">Future Graduates</h2>
            <h3>June 2014</h3>
            <h4>Web Development, Part-Time</h4>
            <ol class="list-unstyled">
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
            </ol>
            <hr>
            <h4>Web Development, Full-Time</h4>
            <ol class="list-unstyled">
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
              <li><a href="#">March 2013</a></li>
              <li><a href="#">February 2013</a></li>
            </ol>
            <h3>September 2014</h3>
            <h4>Web Development, Part-Time</h4>
            <ol class="list-unstyled">
              <li><a href="#">January 2014</a></li>
              <li><a href="#">December 2013</a></li>
              <li><a href="#">November 2013</a></li>
              <li><a href="#">October 2013</a></li>
              <li><a href="#">September 2013</a></li>
              <li><a href="#">August 2013</a></li>
            </ol>
            <hr>
            <h4>Web Development, Full-Time</h4>
            <ol class="list-unstyled">
              <li><a href="#">July 2013</a></li>
              <li><a href="#">June 2013</a></li>
              <li><a href="#">May 2013</a></li>
              <li><a href="#">April 2013</a></li>
              <li><a href="#">March 2013</a></li>
              <li><a href="#">February 2013</a></li>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->
      <?php } else { ?>
          <h3>Sorry, but you must be logged in to access this page.</h3>
          <h3>Please return <a href="index.php">here</a> to log in with your LinkedIn credentials.</h3>
          <h3>If you are a CDIA alumnus and still cannot log in, contact <a href="https://www.linkedin.com/in/genebabon" target="_blank">Gene Babon</a>.</h3>
          <br><br><br><br>
      <?php } ?>
          <hr>

      <?php include 'inc/footer.php'; ?>
      
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
  </body>
</html>
