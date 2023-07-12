<?php

ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);
// Retrieve form data
$businessUnit = $_POST['business_unit'];
$franchise = $_POST['franchise'];
$comMed = $_POST['com_med'];
$brand = $_POST['brand'];
$campaignName = $_POST['campaign_name'];
$campaignType = $_POST['campaign_type'];
$deliveryType = $_POST['delivery_type'];
$contentType = $_POST['content_type'];
$channel = $_POST['channel'];
$segmentName = $_POST['segment_name'];

// Database connection settings
$host = 'sql7.freesqldatabase.com';
$dbName = 'sql7632170';
$username = 'sql7632170';
$password = 'fpqG3VD2MY';

try {
  // Connect to the database
  $conn = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8mb4", $username, $password);
  
  // Set the error mode to exception for error handling
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  // Prepare the SQL statement
  $stmt = $conn->prepare("INSERT INTO NamingConvention (business_unit, franchise, com_med, brand, campaign_name, campaign_type, delivery_type, content_type, channel, segment_name) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
  
  // Bind the form field values to the statement
  $stmt->bindParam(1, $businessUnit);
  $stmt->bindParam(2, $franchise);
  $stmt->bindParam(3, $comMed);
  $stmt->bindParam(4, $brand);
  $stmt->bindParam(5, $campaignName);
  $stmt->bindParam(6, $campaignType);
  $stmt->bindParam(7, $deliveryType);
  $stmt->bindParam(8, $contentType);
  $stmt->bindParam(9, $channel);
  $stmt->bindParam(10, $segmentName);
  
  // Execute the statement
  $stmt->execute();
  
  // Provide feedback to the user
  echo "Form data submitted successfully!";
} catch(PDOException $e) {
  // Handle any errors
  echo "Error: " . $e->getMessage();
}

// Close the database connection
$conn = null;
?>
