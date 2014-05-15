<?php

$linkedinID = $_POST['linkedinID'];
//remove http:// and/or http://
$linkedinURL = preg_replace("(https?://)", "", $_POST['profileURL']);
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$pictureURL = $_POST['pictureURL'];
$location = $_POST['location'];
$email = $_POST['email'];
//get current positions
$current = json_decode($_POST['current']);
$number = $current->{'_total'};
for ($i=0; $i < $number; $i++) {
	${'cur_comp' . ($i+1)} = $current->{'values'}[$i]->{'company'}->{'name'};
	${'cur_title' . ($i+1)} = $current->{'values'}[$i]->{'title'};
}
//get past positions
$past = json_decode($_POST['past']);
$past_comp1 = $past->{'values'}[0]->{'company'}->{'name'};
$past_title1 = $past->{'values'}[0]->{'title'};
// $company = $current->{'values'}[0]->{'company'}->{'name'};
echo $past_comp1 . ': ' . $past_title1;





?>

<!-- {"_total":2,"values":[{"company":{"id":2838206,"industry":"Internet","name":"Scion Web Design","size":"Myself Only","type":"Sole Proprietorship"},"title":"Owner"},{"company":{"industry":"Sports","name":"Cape Ann League Scores"},"title":"Owner"}]}  -->