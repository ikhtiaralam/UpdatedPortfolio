<?php
	
	/*
		The Send Mail php Script for Contact Form
		Server-side data validation is also added for good data validation.
	*/
	
	// $data['error'] = false;
	
	// $name = $_POST['name'];
	// $email = $_POST['email'];
	// $subject = $_POST['subject'];
	// $message = $_POST['message'];
	
	// if( empty($name) ){
	// 	$data['error'] = 'Please enter your name.';
	// }else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
	// 	$data['error'] = 'Please enter a valid email address.';
	// }else if( empty($subject) ){
	// 	$data['error'] = 'Please enter your subject.';
	// }else if( empty($message) ){
	// 	$data['error'] = 'The message field is required!';
	// }else{
		
		// $formcontent="From: $name\nSubject: $subject\nEmail: $email\nMessage: $message";
		
		
		//Place your Email Here
	// 	$recipient = "ikhtiaralam@gmail.com";
		
	// 	$mailheader = "From: $email \r\n";
		
	// 	if( mail($recipient, $name, $formcontent, $mailheader) == false ){
	// 		$data['error'] = 'Sorry, an error occured!';
	// 	}else{
	// 		$data['error'] = false;
	// 	}
	
	// }
	
	// echo json_encode($data);
	
// ?>

<!-- <?php
// $name = $_POST['name'];
// $email = $_POST['email'];
// $subject = $_POST['subject'];
// $message = $_POST['message'];
// // $formcontent=" From: $name \n Phone: $phone \n Call Back: $call \n Website: $website \n Priority: $priority \n Type: $type \n Message: $message";
// $formcontent="From: $name\nSubject: $subject\nEmail: $email\nMessage: $message";
// $recipient = "ikhtiaralam@gmail.com";
// $subject = "Contact Form";
// $mailheader = "From: $email \r\n";
// mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
// echo "Thank You!";
?> -->

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$call = $_POST['call'];
$website = $_POST['website'];
$priority = $_POST['priority'];
$type = $_POST['type'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n Call Back: $call \n Website: $website \n Priority: $priority \n Type: $type \n Message: $message";
$recipient = "youremail@here.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>