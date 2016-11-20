<?php $filename = 'install/install.php';

if (file_exists($filename)) {  

unlink('install/index.html');
unlink('install/install.php');
unlink('install/css/style.css');
unlink('install/js/index.js');

rmdir('install/css');
rmdir('install/js');
rmdir('install');

echo '<center><p><b style="font-size:35px; color:orange">Removing Files ...</b></p></center>';

}
else { echo '<center><p><b style="font-size:35px; color:green">No need to run script, "Install" does not exist!</b></p></center>';}
?>

<meta http-equiv="refresh" content=".5; url=test.php">