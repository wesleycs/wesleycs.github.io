<?php
	function fetchData($url){

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curel_setopt($ch, CURLOPT_TIMEOUT, 20);
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
	}

	$result = fetchData("https://api.instagram.com/v1/users/30797346/media/recent/?access_token=30797346.ab103e5.ca722a923c3547ccb3687b53192e1677&count=1");
	$result = json_decode($result);

	foreach ($result->data as $post) {
				
		}

	?>
