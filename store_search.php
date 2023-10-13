<?php
include('create_table.php'); // Include database connection file

// Fetch search history from the database
$query = "SELECT search_query, search_timestamp FROM search_records ORDER BY search_timestamp DESC";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Search Query: " . $row["search_query"]. " - Timestamp: " . $row["search_timestamp"]. "<br>";
    }
} else {
    echo "No search history available.";
}

$conn->close();
?>
