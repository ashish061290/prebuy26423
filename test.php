<?php
	// Account details
	$apiKey = urlencode('06+/Il7R8To-pClpb66JOCskU0YguiLpdXJtnbHkj7');
	
	// Message details
	$numbers = array(919165942918,919098404834);
	$sender = urlencode('PREBUY');
	$message = rawurlencode('This is your message');
 
	// Prepare data for POST request
	$data = 'apikey=' . $apiKey . '&numbers=' . $numbers . "&sender=" . $sender . "&message=" . $message;
 
	// Send the GET request with cURL
	$ch = curl_init('https://api.textlocal.in/send/?' . $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	echo $response;
?>