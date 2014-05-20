<?php
include 'connect.php';

function getProfiles() {
	global $db;
	$query = "SELECT * FROM users";
	$stmt = $db->prepare($query);
	$result = $stmt->execute();
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	if ($rows) {
		foreach ($rows AS $row) {
			if ($row['linkedin_id'] !== '') { ?>
				<div class="blog-post cf">
	            <img src="<?php echo $row['picture_url'] ?>" alt="<?php echo $row['first_name'] . ' ' . $row['last_name'] ?> Photo" class="profile-pic img-thumbnail">
	          <h4><?php echo $row['first_name'] . ' ' . $row['last_name'] ?> | 
	            <a class="btn btn-success btn-xs" href="<?php echo $row['portfolio_url'] ?>" target="_blank">Portfolio</a> | <a href="<?php echo $row['linkedin_url']; ?>" target="_blank"><img src="img/LinkedinIcon.png" style="width:22px; border-radius: 3px;"/></a> | <a class="btn btn-xs btn-danger" href="mailto: <?php echo $row['email']; ?>" role="button">Email 
	              <span class="glyphicon glyphicon-envelope"></span></a></h4>
	            <p><?php echo $row['location'] ?></p>
	            <div class="cf">
	            	<ul class="current positions">
			            <strong>Current Positions:</strong>
		            	<?php if ($row['current1_company'] !== '') {
		            		echo '<li>' . $row['current1_title'] . ' at ' . $row['current1_company'] . '</li>';
		            	} ?>
		            	<?php if ($row['current2_company'] !== '') {
		            		echo '<li>' . $row['current2_title'] . ' at ' . $row['current2_company'] . '</li>';
		            	} ?>
		            	<?php if ($row['current3_company'] !== '') {
		            		echo '<li>' . $row['current3_title'] . ' at ' . $row['current3_company'] . '</li>';
		            	} ?>
	            	</ul>
	            	<ul class="past positions">
			            <strong>Past Position:</strong>
		            	<?php if ($row['past1_company'] !== '') {
		            		echo '<li>' . $row['past1_title'] . ' at ' . $row['past1_company'] . '</li>';
		            	} ?>
	            	</ul>  
	            </div>       
	           <hr>
	          </div><!-- /.blog-post -->
	    <?php
			}
		}
	}
}
?>