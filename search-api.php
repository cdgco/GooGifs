<?php 

include 'config.php';

$s0 = "http://api.giphy.com/v1/gifs/search?api_key=$apikey&limit=100&rating=pg-13";
$s1 = $s0 . '&q=' . $_GET['gifquery'];
$s2 = file_get_contents($s1);
$s3 = json_decode($s2, true);
$s4 = $s3[data];
$s5 = $s4[$_GET['gifnumber']];
$s6 = $s5[images];
$s7 = $s6[original];
$search = $s7[url];

?>