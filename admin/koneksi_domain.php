<?php
// Database configuration
$host = "juragan-travel.tifa.myhost.id";
$username = "tifamyho_juragan";
$password = "@JTIpolije2023";
$database = "tifamyho_juragan";

// Attempt to establish a connection to the database
$koneksi = new mysqli($host,$username,$password,$database);

// Check the connection
if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

// Connection successful

?>
