<!-- <?php
// Define database credentials
$host = "localhost";
$username = "your-username";
$password = "your-password";
$dbname = "your-database-name";

// Create database connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Perform database operations here

// Close database connection
mysqli_close($conn);
?>
 -->



 <?php
// Define database credentials
$host = "localhost";
$username = "your-username";
$password = "your-password";
$dbname = "your-database-name";

// Create database connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Define query to insert data into table
$sql = "INSERT INTO orders (order_id, customer_name, customer_email, order_date, order_status) VALUES ('123', 'John Doe', 'john@example.com', '2023-04-28', 'Pending')";

// Execute query
if (mysqli_query($conn, $sql)) {
    echo "Order inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>


