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
            <h2 class="brickred">Eligible Alumni</h2>
            <h3>2006 - 2014</h3>
            <hr>
            <h4 style="padding-bottom:10px">This list is a work in progress ...</h4>
            <ol class="list-unstyled">
              <li>Ahearn, Rachel</li>
              <li>Adams-Lukowsky, Kaitlyn</li>
              <li>Ajamian, Nicole</li>
              <li>Albert, Misty (DelCid)</li>
              <li>Alidad, Sebastian</li>
              <li>Almeida, Matthew</li>
              <li>Almy, Kristiina</li>
              <li>Amarantos, Johnny</li>
              <li>Anderson, Christopher</li>
              <li>Anderson, Elin</li>
              <li>Anderson, Julianna</li>
              <li>Andriesse, Jeff</li>
              <li>Antreasian, Chris</li>
              <li>Anzueto, Jose</li>
              <li>Aronson, Nancy</li>
              <li>Aubrey, Sarah</li>
              <li>Austin Sheahan, Kyre</li>
              <li>Ausura, Jeff</li>
              <li>Axbey, Christine</li>
              <li>Babineau, Brian</li>
              <li>Baig, Abbas</li>
              <li>Balaisis, Orentas</li>
              <li>Bann, David</li>
              <li>Barberio, Brandon</li>
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
              <li>Bernardi, Chris</li>
              <li>Bettger, Jonathan</li>
              <li>Bivens, Josh</li>
              <li>Blake, Seth</li>
              <li>Blom, Adam</li>
              <li>Bloom, Bobbi</li>
              <li>Bodzioch, Lee</li>
              <li>Booy, Johannes</li>
              <li>Borkowski, Erica</li>
              <li>Boucher, Jackie</li>
              <li>Bowater, Aimee</li>
              <li>Boyle, Nat</li>
              <li>Breslin, Emily</li>
              <li>Brown, David</li>
              <li>Bruce, Linda</li>
              <li>Bruneau, Melissa</li>
              <li>Buczek, Danielle</li>
              <li>Burke, Dan</li>
              <li>Burman, Sarah</li>
              <li>Butler, Erin (Manning)</li>
              <li>Caplan, Jeff</li>
              <li>Caprio, Mark</li>
              <li>Caravella, Nicole</li>
              <li>Carbone, Elaine</li>
              <li>Carignan, Theresa</li>
              <li>Carrión, Jaime</li>
              <li>Carroll, Paul</li>
              <li>Carvajal, Goyo</li>
              <li>Casey, Donel</li>
              <li>Casey, Jon</li>
              <li>Cassel, Martha</li>
              <li>Casselman, Todd</li>
              <li>Castelluccio, James</li>
              <li>Chan, Yin Yin</li>
              <li>Chang, Kun-Tee</li>
              <li>Chase, Adam</li>
              <li>Chick, Andy</li>
              <li>Christensen, Angela</li>
              <li>Cisto, Katie</li>
              <li>Clapp, Amanda (Young)</li>
              <li>Clapp, Jared</li>
              <li>Clapper, Alicia</li>
              <li>Clark, Jonathan</li>
              <li>Clemente, Sofie</li>
              <li>Clinton, Alisha</li>
              <li>Coffey, Jen</li>
              <li>Cole, Sarah</li>
              <li>Condella, Terese</li>
              <li>Consigli, Mark</li>
              <li>Conroy, Kyla</li>
              <li>Conway, Ryan</li>
              <li>Coogan, Chris</li>
              <li>Cooney, Ken</li>
              <li>Cooney, Tim</li>
              <li>Corbin, Caitlin</li>
              <li>Corbin, Nicole</li>
              <li>Cornish, Heath</li>
              <li>Costa, Jessica</li>
              <li>Coven, Liz (Menard)</li>
              <li>Covino, Emily</li>
              <li>Cranwell, Evan</li>
              <li>Cronin, Joseph Anthony</li>
              <li>Cross, Kelly</li>
              <li>Cultrera, Laura</li>
              <li>D'Acci, Tara (Buzzell)</li>
              <li>Dailey, Colleen</li>
              <li>Daniells, Lori</li>
              <li>Daniels, Alden (Chad)</li>
              <li>Daniloff, Christine</li>
              <li>Davies, Sean</li>
              <li>Davis, Alexis</li>
              <li>Davis, Bob</li>
              <li>Dekermenjian, Lisa</li>
              <li>DelVecchio, Bob</li>
              <li>Dennesen, Tom</li>
              <li>DePaula, Nem</li>
              <li>Deshpande, Sanika</li>
              <li>Deutsch, Nancy</li>
              <li>Deveau, Bob</li>
              <li>DeVincentis, Linda</li>
              <li>DiBenedetto, Danielle (Slapak)</li>
              <li>DiGiacomo, Donna</li>
              <li>Dignam, Laura</li>
              <li>DiLello, Bethany</li>
              <li>Diligent, Fred</li>
              <li>Dixon, Sarah</li>
              <li>Doherty, Don</li>
              <li>Doko, Gentjana</li>
              <li>Dolan, Barbara</li>
              <li>Dragani, Erica</li>
              <li>Dubois, Sara</li>
              <li>Dunkle, Emily</li>
              <li>Dunn, Gregory</li>
              <li>Dupoux, Sergia</li>
              <li>Dutton, Adam</li>
              <li>Dzevenskay, Tatiana</li>
              <li>Edwards, Jono</li>
              <li>Ehrenzweig, Jill</li>
              <li>Ellis, Jon</li>
              <li>Ellis, Tim</li>
              <li>England, Jennifer</li>
              <li>Enos, Justin</li>
              <li>Eom, Joo Young</li>
              <li>Erickson, Josh</li>
              <li>Espinoza, Rob</li>
              <li>Farrell, John</li>
              <li>Ferguson, Gillian</li>
              <li>Figueroa, Giovanni</li>
              <li>Finley, Kyle</li>
              <li>Fiore, Domenic</li>
              <li>Fiorini, Victoria</li>
              <li>Fisher, Jodi</li>
              <li>Fitzpatrick, Maribeth (Foley)</li>
              <li>Fjelde, Christopher</li>
              <li>Fleming, Ethan</li>
              <li>Fleming, Kathryn</li>
              <li>Fontes, Margarita (Williams)</li>
              <li>Foresto, Kristin</li>
              <li>Forsberg, Zach</li>
              <li>Frank, Jarret</li>
              <li>Fruchtman, Shira</li>
              <li>Fulghum, Stephen</li>
              <li>Gaffney, Trent</li>
              <li>Gale, Mariah</li>
              <li>Gallagher, Jessica</li>
              <li>Gallimore, Lindsay</li>
              <li>Ganno, Tara</li>
              <li>Garcini, Alexander</li>
              <li>Geary, Mike</li>
              <li>Gesten, Charlotte</li>
              <li>Gierymski, Karoline</li>
              <li>Gilday, Susan</li>
              <li>Gill, Tom</li>
              <li>Goldfarb, Gregory</li>
              <li>Goncalves, Liz</li>
              <li>Gonzalez, Cecilia</li>
              <li>Grave, Zoe</li>
              <li>Grant, Craig</li>
              <li>Gray, Vanessa</li>
              <li>Green, Heather (Poloian)</li>
			  <li>Greene, Samuel</li>
              <li>Gross, Don</li>
              <li>Gruber, Elizabeth</li>
              <li>Haley, Jesse</li>
              <li>Hall, Ashley</li>
              <li>Ham, Sopanha</li>
              <li>Hammond, Amber (Dillard)</li>
              <li>Hanaford, Dave</li>
              <li>Hanley, Beth</li>
              <li>Hartog, Michelle</li>
              <li>Hassan, Elizabeth</li>
              <li>Hassan, Kate</li>
              <li>Hatziliadis, Megan (Rodriguez)</li>
              <li>Hekking, William</li>
              <li>Heller, Jayme</li>
              <li>Hemady, Nadia</li>
              <li>Heron, Scott</li>
              <li>Herron, Emily</li>
              <li>Hill, Joan</li>
              <li>Hobin, Virginia (Wise)</li>
              <li>Howes, Dan (deceased)</li>
              <li>Huang, Andrew</li>
              <li>Hudson, Mark</li>
              <li>Iliev, Lubo</li>
              <li>Itchkavitch-Levasseur, Sonya</li>
              <li>Jacobson, Dan</li>
              <li>Jacquet, Katherine (Heger)</li>
              <li>Jannetty, John</li>
              <li>Jannetty, Sara</li>
              <li>Jasset, John</li>
              <li>Jewett, Michael</li>
              <li>Johnston, Laura</li>
              <li>Jolles, Brian</li>
              <li>Jones, Liz</li>
              <li>Jorgensen, Juli</li>
              <li>Jouris, Brian</li>
              <li>Keil, Kourtney</li>
              <li>Kalogeros, Jeff</li>
              <li>Kandra, Joe</li>
              <li>Keefe, Alyssa Galeros</li>
              <li>Keegan, Liz</li>
              <li>Kelly, Nancie (Bouffard)</li>
              <li>Kemp-Benedict, Tyler</li>
              <li>Kennedy, Eddie</li>
              <li>Kiersh, Dave</li>
              <li>Kim, Judy</li>
              <li>Ko, Tammy</li>
              <li>Kohnen, Matt</li>
              <li>Kolbech, Josie</li>
              <li>Kowal, Younia</li>
              <li>Krieger, Laurie</li>
              <li>Krings, Werner</li>
              <li>Kupillas, Kevin</li>
              <li>Lamothe, Chris</li>
              <li>Langan, Courtney (Rank)</li>
              <li>Lau, Rachel</li>
              <li>Laurenza, John</li>
              <li>Lavalle, Kelly</li>
              <li>Lawless, Kate</li>
              <li>Lawson, Eric</li>
              <li>Lee, Chris</li>
              <li>Lee, Sarah</li>
              <li>Lefort, Tim</li>
              <li>Leger, Charlie</li>
              <li>Leiendecker, Ann</li>
              <li>Lemieux, Kelly (Nixon)</li>
              <li>Levine, Naomi</li>
              <li>Lewis, Suzanne</li>
              <li>Liang, Li Shan</li>
              <li>Light, Ryan</li>
              <li>Lim, Charleen</li>
              <li>Lind, Lara</li>
			  <li>Lindberg, Tara</li>
              <li>Lisowski, Brian</li>
              <li>Logan, Rob</li>
              <li>Logue, Brendan</li>
              <li>Lord, Rachel (Pearson)</li>
              <li>Lovell, Emily</li>
              <li>Lovett, Amy (Sullo)</li>
              <li>Lundberg, Rob</li>
              <li>Lydon, Ed</li>
              <li>Macey, John</li>
              <li>Mackey, Chris</li>
              <li>MacAskill, Corey</li>
              <li>MacKenzie, John</li>
              <li>MacLeod, Brooks</li>
              <li>MacNeil, Peggy</li>
              <li>Madigan, Farron</li>
              <li>Magyar, Sarah</li>
              <li>Manove, Nick</li>
              <li>Marek, Martina</li>
              <li>Markham, Courtney</li>
              <li>Marsh, Abby</li>
              <li>Martineau, Jessica (Jones)</li>
              <li>Martocchio, Amanda</li>
              <li>Masucci, Sharon</li>
              <li>Matthews, Julie</li>
              <li>McCann, Kelly Ann</li>
              <li>McCarthy, Jamie</li>
              <li>McCarthy, Nicole</li>
              <li>McCue, Helen</li>
              <li>McGurty, Cheryl (Greatorex)</li>
              <li>McHugh, Andrew</li>
              <li>McIntyre, Nancy</li>
              <li>McKee, Phyllis (Lurie)</li>
              <li>McKenna, Bobby</li>
              <li>McLean, Anabelle</li>
              <li>McLean, Lauren</li>
              <li>McManus, Bryan</li>
              <li>McMullen, Karen (Dzengelewski)</li>
              <li>McNair, Betsy</li>
              <li>McNamara, Shauna</li>
              <li>McReynolds, Patrick</li>
              <li>Mears Koar, Kitty</li>
              <li>Mehta, Reshma</li>
              <li>Memmelaar, Andrew</li>
              <li>Meriwether, Alex</li>
              <li>Messina, Nancy</li>
              <li>Miller, Kristine</li>
              <li>Miller, Sam</li>
              <li>Mills, Emily</li>
              <li>Mills, Jennifer</li>
              <li>Minkkinen, Dan</li>
              <li>Mintz, Sarah (Stroll)</li>
              <li>Moner, Marianne</li>
              <li>Monterrosa, Karla</li>
              <li>Moore, Dawn</li>
              <li>Morales, Diana</li>
              <li>Moreau-Ceballos, Karen</li>
              <li>Morris, Frank</li>
              <li>Morton, Jessica</li>
              <li>Moseley, Suzanne (Chase)</li>
              <li>Munroe, Emily</li>
              <li>Murphy, Kathy</li>
              <li>Nadeau, Melissa</li>
              <li>Nadir, Kate (Barrett)</li>
              <li>Nadle, Michael</li>
              <li>Ndegwa, Carol</li>
              <li>Nicholas, Dan</li>
              <li>Nicolazzo, Andria</li>
              <li>Nichols, Azora (Zoe) Brooke</li>
              <li>Nugent, Megan</li>
              <li>O'Connell, Barbara</li>
              <li>O'Connor, Christopher</li>
              <li>O'Donnell, Julianne</li>
              <li>O'Hara, Caitlin</li>
              <li>O'Koren, Tim</li>
              <li>O'Reilly, Maura</li>
              <li>Oliveira, Kimberly</li>
              <li>Orchard, Kate</li>
              <li>Osaimi, Nadia</li>
              <li>Ouellette, Suzanne</li>
              <li>Overstreet, Adam</li>
              <li>Paduchowski, Steve</li>
              <li>Palmedo, Whitney</li>
              <li>Pappas, Melanie</li>
              <li>Parziale, Diana</li>
              <li>Patz, John</li>
              <li>Paynter, Martha</li>
              <li>Peduto, John</li>
              <li>Pendleton, Brie</li>
              <li>Percoco, Eric</li>
              <li>Percuoco, Phil</li>
              <li>Pericotti, Jim</li>
              <li>Pierce, Michael</li>
              <li>Pinney, Emily</li>
              <li>Pitts, Christopher</li>
              <li>Phan, Mimi</li>
              <li>Picard, Laurie</li>
              <li>Picariello, Diana</li>
              <li>Pilon, Dandy</li>
              <li>Pisano, Pauline</li>
              <li>Pollock, Matt</li>
              <li>Powers Tomas, Julie</li>
              <li>Prater, Eric</li>
              <li>Proctor, Jordon</li>
              <li>Prosmitsky, Jenya</li>
              <li>Pye, Brian</li>
              <li>Quattrocchi, Mark</li>
              <li>Quinn, Bob</li>
              <li>Quinn, Elissa</li>
              <li>Rabin, Jenn</li>
              <li>Ramirez, Irene</li>
              <li>Reevior, Jim</li>
              <li>Reif-Caplan, Benjamin</li>
              <li>Relihan, Micaela</li>
              <li>Reny, Paul</li>
              <li>Restrepo, Juan Camilo</li>
              <li>Ribot, Andres</li>
              <li>Rier, Amanda (Sueiro)</li>
              <li>Rier, Eric</li>
              <li>Robillard, Linda</li>
              <li>Romagnoli, Pam</li>
              <li>Romine, Blake</li>
              <li>Rooney, Nik</li>
              <li>Roos, Will</li>
              <li>Rose, Phil</li>
              <li>Rosenthal, Alex</li>
              <li>Roulstone, Marc</li>
              <li>Rovito, Liz</li>
              <li>Rukakoski, Mark</li>
              <li>Runciman, Jenny</li>
              <li>Russo, Brian</li>
              <li>Rutenberg-Peake, Jessica</li>
              <li>Ryczek, Mike</li>
              <li>Samargedlis, Michelle</li>
              <li>Santo, Beth</li>
              <li>Sawyer, Charlene</li>
              <li>Scanlon, Chris</li>
              <li>Schaad, Cathy</li>
              <li>Schiavo, Mark</li>
              <li>Schmith, Karl</li>
              <li>Schultz, Erica</li>
              <li>Schwab, Melissa</li>
              <li>Seifert, Brian</li>
              <li>Seri, Ingrid</li>
              <li>Severse, Josh</li>
              <li>Sibulkin, Tiffany (Souza)</li>
              <li>Siener, Jim</li>
              <li>Simon, Nate</li>
              <li>Sliwinski, Jackie</li>
              <li>Smith, Alyson</li>
              <li>Smith, Ashley</li>
              <li>Smith, R.L.</li>
              <li>Smith, Robert</li>
              <li>Smith-Morgan, Nikki</li>
              <li>Smyth, Stephen T.</li>
              <li>Sogor, Alyssa</li>
              <li>Solano, Matt</li>
              <li>Solomon, Lauren</li>
              <li>Spaulding, Cici</li>
              <li>Stanikmas, Lynn</li>
              <li>Stanton, Richard</li>
              <li>Steller, Corrine</li>
              <li>Stetson, Kristy</li>
              <li>Stewart, Dylan</li>
              <li>Studley, Phil</li>
              <li>Sullivan, Carey (Murphy)</li>
              <li>Surdykowski, Jamie (Finazzo)</li>
              <li>Sutherland, Corey</li>
              <li>Swahn, Nichole (Daddario)</li>
              <li>Swanton, Janet</li>
              <li>Sweeney, Adam</li>
              <li>Symond, Jonathan</li>
              <li>Szetela, Alison</li>
              <li>Tabb, Laura</li>
              <li>Tam, Adam</li>
              <li>Tanner, Stacey</li>
              <li>Taussig, Bill</li>
              <li>Tenner, Grace</li>
              <li>Testa, Stephanie (Paul)</li>
              <li>Thayer, Joshua</li>
              <li>Theisen, Stephanie (Picardo)</li>
              <li>Therrien, Shari (Kreisberg)</li>
              <li>Thompson, Daniel</li>
              <li>Thorp, Emma</li>
              <li>Toce, Mark</li>
              <li>Trachy, Scott</li>
              <li>Travis, Ryan</li>
              <li>Trimmis, Tina</li>
              <li>Trotto, Jodie</li>
              <li>Trudeau, Courtney (Miller)</li>
              <li>Twaddell, Emily</li>
              <li>Uehlein, Elaine</li>
              <li>Veary, Adam</li>
              <li>Vecchio, Laura</li>
              <li>Vincent, Linda (Chasey)</li>
              <li>Viscomi, Mike</li>
              <li>Walzer, Philipp</li>
              <li>Wambolt, Devin</li>
              <li>Wang, Rui</li>
              <li>Ward, Ellen</li>
              <li>Ward, Keith</li>
              <li>Wawrzak, Aggie</li>
              <li>Webb, Theodore Ford</li>
              <li>Weisbeck, Jesse</li>
              <li>Weisman, Lindsey Rose (Godfrey)</li>
              <li>Wentzel, Laura</li>
              <li>White, Becky (Bowman)</li>
              <li>White, Nancy</li>
              <li>Wilcox, Andrew</li>
              <li>Williams, Jerry</li>
              <li>Williams, Marie</li>
              <li>Wilson, Amy (Tsechrintzis)</li>
              <li>Winterol, Shauna (deceased)</li>
              <li>Wishengrad, Ruth</li>
              <li>Wolowicz, Jill</li>
              <li>Wong, Mable</li>
              <li>Wright, Rachel</li>
              <li>Ye, Anning</li>
              <li>Yezukevich, Pete</li>
              <li>Zein, Nadine</li>
              <li>Zikas-Bernard, Gida</li>
            </ol>
            <h4 style="padding-bottom:10px">If you know an alumnus who should be on this list but isn't, please contact <a href="https://www.linkedin.com/in/genebabon" target="_blank">Gene Babon</a>.</h4>
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
