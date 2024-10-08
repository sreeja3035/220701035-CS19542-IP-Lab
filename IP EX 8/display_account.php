<?php
include 'db.php';

$sql = "SELECT * FROM ACCOUNT";
$result = mysqli_query($conn, $sql);

echo "<h2>Account Information</h2>";
if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'><tr><th>Account NO</th><th>Account Type</th><th>Balance</th><th>Customer ID</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["ANO"] . "</td><td>" . $row["ATYPE"] . "</td><td>" . $row["BALANCE"] . "</td><td>" . $row["CID"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No account data found.";
}

mysqli_close($conn);
?>
