<?php
	$posts = [
    [
        "lisensi" => "lasdasdjqw4349ijasd",
        "domain" => "magarindo.com",
    ],
    [
        "lisensi" => "lasdasdjqadsdasw4349ijasd",
        "domain" => "google.com",
    ],
    [
        "lisensi" => "lasdasdjqw",
        "domain" => "madeinara.net",
    ]
];

// Encode array to JSON with formatting
$json = json_encode($posts, JSON_PRETTY_PRINT);
$result = json_decode($json, true);

$getlisensi	= $_REQUEST['l'];
$getdomain	= $_REQUEST['d'];


foreach ($result as $data){
	
	if($getlisensi == $data['id'] && $getlisensi == $data['title']){
		$access ='true'
	}else{
		$access ='false'
	}
}

?>