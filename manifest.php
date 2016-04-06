<?php
header('Content-Type: text/cache-manifest');
$filesToCache = array(
    './index.html', 
    './js/todo7.js', 
    './css/todo7.css', 
    './img/bg.jpg', 
    './libs/framework7/dist/js/framework7.min.js', 
    './libs/framework7/dist/css/framework7.min.css',
	'./img/startup.png'
);
?>
CACHE MANIFEST

CACHE:
<?php
// Print files that we need to cache and store hash data
$hashes = '';
foreach($filesToCache as $file) {
    echo $file."\n";
    $hashes.=md5_file($file);
};
?>

NETWORK:
*

# Hash Version: <?=md5($hashes)?>