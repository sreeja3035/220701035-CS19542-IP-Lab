<?php
include 'db.php';

$sql = "SELECT * FROM CUSTOMER";
$result = mysqli_query($conn, $sql);

echo "<h2>Customer Information</h2>";
if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'><tr><th>Customer ID</th><th>Customer Name</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["CID"] . "</td><td>" . $row["CNAME"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No customer data found.";
}

// Close connection
mysqli_close($conn);
?>
