<?php
// composer autoload
require 'vendor/autoload.php';

// composer mysql connect
$host = new mysqli("localhost","root","", "test");
 
// Check connection
if ($host->connect_error) {
	die("Koneksi gagal: " . $host->connect_error);
}

// mysql select table siswa
$sql = "SELECT id, nama, alamat FROM siswa";
$result = $host->query($sql);

session_start();

// konek ke template dan render profile page
$templates = new League\Plates\Engine('views');
echo $templates->render('site/index.view', ['data' => $result]);
?>