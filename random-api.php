<?php 

include 'config.php';

$r1 = "http://api.giphy.com/v1/gifs/random?api_key=$apikey";
$r2 = file_get_contents($r1);
$r3 = json_decode($r2, true);
$r4 = $r3[data];
$random = $r4[image_original_url];

?>