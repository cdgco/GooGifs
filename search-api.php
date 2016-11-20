<?php 

include 'config.php';

$gifnum = $_GET['gifnumber'];
$startnumber = '0';

$s0 = "http://api.giphy.com/v1/gifs/search?api_key=$apikey&limit=100&rating=pg-13";
$s1 = $s0 . '&q=' . $_GET['gifquery'];
$s2 = file_get_contents($s1);
$s3 = json_decode($s2, true);
$s4 = $s3[data];

if ($gifnum == 1) {

} 
elseif ($gifnum == 2) {
    echo "'{$element}' is NOT numeric", PHP_EOL;
};

if (is_numeric($startnumber)) {
    $mainnumber = gmp_add($startnumber, $gifnum); ;
} else {
    $mainnumber = 0;
  
};

$s5 = $s4[$mainnumber];
$s6 = $s5[images];
$s7 = $s6[original];
$search = $s7[url];

print_r($_GET['element']);
?>
