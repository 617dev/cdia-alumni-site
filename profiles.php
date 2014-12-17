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
            <h2 class="brickred">All Alumni</h2>
            <h3>2006 - 2014</h3>
            <hr>
            <h4 style="padding-bottom:10px">This list is a work in progress ...</h4>
            <ol class="list-unstyled">
              <li>Ahearn, Rachel</li>
              <li>Albert, Misty (DelCid)</li>
              <li>Almeida, Matthew</li>
              <li>Alidad, Sebastian</li>
              <li>Amarantos, Johnny</li>
              <li>Anderson, Christopher</li>
              <li>Anderson, Elin</li>
              <li>Anderson, Julianna</li>
              <li>Andriesse, Jeff</li>
              <li>Antreasian, Chris</li>
              <li>Anzueto, Jose</li>
              <li>Aronson, Nancy</li>
              <li>Aubrey, Sarah</li>
              <li>Austin Sheahan</li>
              <li>Ausura, Jeff</li>
              <li>Axbey, Christine</li>
              <li>Babineau, Brian</li>
              <li>Baig, Abbas</li>
              <li>Balaisis, Orentas</li>
              <li>Bann, David</li>
              <li>Barry, Ed</li>
              <li>Basilone, Mary</li>
              <li>Bator, Brian</li>
              <li>Bauman, Kathryn</li>
              <li>Bayides, Stephanie</li>
              <li>Beach, Carrie</li>
              <li>Beadle, Dan</li>
              <li>Bean, Sandra</li>
              <li>Begin, Kyle</li>
              <li>Berkowitz, Jon</li>
              <li>Bettger, Jonathan</li>
              <li>Blom, Adam</li>
              <li>Brown, David</li>
              <li>Bivens, Josh</li>
              <li>Bloom, Bobbi</li>
              <li>Bodzioch, Lee</li>
              <li>Booy, Johannes</li>
              <li>Borkowski, Erica</li>
              <li>Boucher, Jackie</li>
              <li>Boyle, Nat</li>
              <li>Breslin, Emily</li>
              <li>Bruce, Linda</li>
              <li>Bruneau, Melissa</li>
              <li>Buczek, Danielle</li>
              <li>Burke, Daniel</li>
              <li>Burman, Sarah</li>
              <li>To be continued ...</li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>






            </ol>
            <hr>
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
