<?php
$data = array(
    'user_id' => 1,
    'city' => "beijing"
);
print_r($data);
unset($data["city"]);
print_r($data);

//version_compare
$version = "iWeidao/5.2.1 D/219";
$regex = '/\/([\d|.]+) D/'; 
preg_match($regex, $version, $matches);
print_r($matches);

$version = $matches[1];
if(version_compare($version, "5.2") >= 0) {
    $data["media_id"] = "media";
}
print_r($data);