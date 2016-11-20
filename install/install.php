<?php

if (!empty($_GET['p'])) {
    $apikey1 = $_GET['p'];
} 
else {
    $apikey1 = $_GET['a']; 
};

if (!empty($_GET['pubkey'])) {
    $pubkey1 = $_GET['pubkey'];
} 
else { 
$pubkey1 = "NOT SET";
};

$email1 = $_GET['email']; 

$apivar = var_export($apikey1, true);
$emailvar = var_export($email1, true);
$pubkeyvar = var_export($pubkey1, true);


$writestr = "<?php\n\n\$pubkey = $pubkeyvar;\n\n\$apikey = $apivar;\n\n\$email = $emailvar;\n\n?>";

file_put_contents('../config.php', $writestr);
?>

<meta http-equiv="refresh" content=".1; url=../test.php">