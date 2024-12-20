<?php
// Database connection settings
$servername = "localhost";  // Change to your database server if necessary
$username = "root";         // Change to your database username
$password = "mariadb";             // Change to your database password
$dbname = "docDetail";      // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$doc_id = $_POST['doc_id'];
$name = $_POST['name'];

// Prepare SQL query to insert the data
$sql = "INSERT INTO doctor_details (doc_id, name) VALUES ('$doc_id', '$name')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>