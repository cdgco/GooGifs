<?php 

include 'config.php';

$s0 = "http://api.giphy.com/v1/gifs/search?api_key=$apikey&limit=100&rating=pg-13";
$s1 = $s0 . '&q=' . $_GET['gifquery'];
$s2 = file_get_contents($s1);
$s3 = json_decode($s2, true);
$s4 = $s3[data];

$gifnum = $_GET['gifnumber'];

if ($currentnumber == 0) {
    $startnumber = 0; 
} else {
    $startnumber = $currentnumber; 
  
}

$value1 = 1;

  if (is_numeric($startnumber)) { 

if ($gifnum == 1) {
    $mainnumber = $startnumber + $value1; 
} else {
    $mainnumber = $startnumber - $value1; 
  
}
  } 

$currentnumber = $mainnumber;

print_r($mainnumber);

?> 
<!--

$s5 = $s4[$mainnumber];
$s6 = $s5[images];
$s7 = $s6[original];
$search = $s7[url]; -->
