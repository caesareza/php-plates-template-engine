<?php
require 'vendor/autoload.php';
$templates = new League\Plates\Engine('layouts');
echo $templates->render('artikel.view');
?>
