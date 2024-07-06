<?php
$data = file_get_contents('php://input');
$json_data = json_decode($data);
//print_r($json_data);
//exit;
$obj = $json_data;
//print_r($obj);
 $name=$obj->stocks;
// $lname=$obj->signup->last_name;
// $nid=$obj->signup->nationbuilder_id;

//$yummy = json_decode($json);

//echo $yummy->type; //donut

//print_r($obj);
print_r($name);
// Information to be modified
$to_email = "dev@marketsangle.com"; // email address to which the form data will be sent
$subject = "Contact Request"; // subject of the email that is sent
$thanks_page = "index.html"; // path to the thank you page following successful form submission
$contact_page = "index.html"; // path to the HTML contact page where the form appears


// $nam = strip_tags($_POST["contact_name"]);
// $ema = strip_tags($_POST["contact_email"]);
// $pho = strip_tags($_POST["contact_phone"]);
// $com = strip_tags($_POST["contact_message"]);

//$nam = 'Neil';
$nam=$name;
$ema = 'diggincharge@gmail.com';
$pho = '123456';
$com = 'hello 2';


$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: <' .$ema. '>' . "\r\n";
$headers .= "Reply-To: ".$ema."\r\n";

$email_body = 
	"<strong>From: </strong>" . $nam . "<br />
	<strong>Email: </strong>" . $ema . "<br />	
	<strong>Phone: </strong>" . $pho . "<br />	
	<strong>Message: </strong>" . $com;
	

// Assuming there's no error, send the email and redirect to Thank You page
if( mail($to_email, $subject, $email_body, $headers) ) {		$msg_array = array( 'status' => 'true', 'data' => '<i class="glyphicon glyphicon-ok"></i> Thank you ' .$nam. '. Your Email was successfully sent!' );   	echo json_encode($msg_array);	} else {		$msg_array = array( 'status' => 'true', 'data' => '<i class="glyphicon glyphicon-remove"></i> Sorry ' .$nam. '. Your Email was not sent. Resubmit form again Please..' );   	echo json_encode($msg_array);	}

// $fname='neil';
// $lname='M';
// $nid='a12';

//print_r($fname);

// $message_body = 'test';
// mail('nillduke@gmail.com','NB Webhook Data',$message_body);
?>