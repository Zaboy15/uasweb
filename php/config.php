<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = '127.0.0.1';
$databaseName = 'data_mahasiswa';
$databaseUsername = 'root';
$databasePassword = 'P@ssw0rdmyteacher';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>