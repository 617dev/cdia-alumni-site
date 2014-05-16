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
				<div class="blog-post" style="min-height: 120px">
	            <img src="<?php echo $row['picture_url'] ?>" alt="<?php echo $row['first_name'] . ' ' . $row['last_name'] ?> Photo" class="img-thumbnail">
	          <h4><?php echo $row['first_name'] . ' ' . $row['last_name'] ?> | 
	            <a href="#">Portfolio</a> | <a href="<?php echo $row['linkedin_url']; ?>"><img src="img/LinkedinIcon.png" style="width:20px"/></a> | <a class="btn btn-xs btn-default" href="mailto: <?php echo $row['email']; ?>" role="button">Email 
	              <span class="glyphicon glyphicon-envelope"></span></a></h4>
	            <p><?php echo $row['location'] ?></p>
	            <strong>Current Positions:</strong>
	            	<ul style="list-style:none">
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
	            <strong>Past Position:</strong>
	            	<ul style="list-style:none">
	            	<?php if ($row['past1_company'] !== '') {
	            		echo '<li>' . $row['past1_title'] . ' at ' . $row['past1_company'] . '</li>';
	            	} ?>
	            	</ul>         
	          </div><!-- /.blog-post -->
	           <hr>
	    <?php
			}
		}
	}
}
?>