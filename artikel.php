<?php
require 'vendor/autoload.php';
$templates = new League\Plates\Engine('views');

echo $templates->render('site/artikel.view');
?>
