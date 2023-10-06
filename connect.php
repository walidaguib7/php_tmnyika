<?php
// Database information
$hostname = "localhost";
$dbname = "jaloldb";
$username = "walidDB";
$password = "walidaguib7";


// Create a PDO instance
$conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);

// Set PDO error mode to exceptions for better error handling
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo "Connected to the database successfully!";
