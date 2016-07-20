<?php

if($_POST['sw-attributes'])
{
	$curl = curl_init('http://servantwise.dev/api/postForm');
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST"); 
	curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($_POST));
}
else
{
	$curl = curl_init('http://servantwise.dev/api/formgen?callback=getform.php');
}

curl_setopt($curl, CURLOPT_HTTPHEADER, array(
	'Content-Type: application/json',
	"X-Authorization:YourAPIKey"
));

$result = curl_exec($curl);
curl_close($curl);
exit;