<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "search_history";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create table
$table_sql = "CREATE TABLE IF NOT EXISTS search_records (
    id INT AUTO_INCREMENT PRIMARY KEY,
    search_query VARCHAR(255) NOT NULL,
    search_timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($table_sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
