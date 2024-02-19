function trackSale($productId, $productName, $quantity) {
    // Replace with your database connection details
    $servername = "localhost";
    $username = "wordpress";
    $password = "wordpress";
    $dbname = "wordpress";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement
    $sql = "INSERT INTO sales (product_id, product_name, quantity, sale_date) VALUES (?, ?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    
    // Bind parameters
    $stmt->bind_param("isi", $productId, $productName, $quantity);
    
    // Execute the query
    $stmt->execute();
    
    // Check for errors
    if ($stmt->error) {
        echo "Error: " . $stmt->error;
    } else {
        echo "Sale tracked successfully!";
    }
    
    // Close statement and connection
    $stmt->close();
    $conn->close();
}

// Example usage
$productId = 1;
$productName = "Sample Product";
$quantity = 2;
trackSale($productId, $productName, $quantity);
