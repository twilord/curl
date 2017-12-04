<?php
	function getartical($output)
	{
		$reg_tag_a = '/http://[a-zA-Z0-9./-_]+.html|php|htm/';
		$result = preg_match_all($reg_tag_a,$output,$match_result);
		if($result)
		{
			print_r($match_result);
		}
	}

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "www.sdu.edu.cn");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	$output = curl_exec($ch);
	curl_close($ch);
	getartical($output);
?>