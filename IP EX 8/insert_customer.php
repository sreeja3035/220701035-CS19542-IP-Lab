<!doctype html>
<html><head><title>Insert Customer</title></head>
<body>    
<form action="" method="post">
    Customer Name: <input type="text" name="cname" required><br>
    <input type="submit" value="Add Customer" name="add_customer">
</form>
</body>
</html>

<?php
    include 'db.php';
    if(isset($_POST['add_customer'])){
        $cname = $_POST['cname'];

        // Insert data
        if (!empty($cname)) {
            $sql = "INSERT INTO CUSTOMER (CNAME) VALUES ('$cname')";
            if (mysqli_query($conn, $sql)) {
                echo "New customer created successfully.";
            } else {
                echo "Error: Could not execute the query. Please try again later.";
            }
        }
        else {
            echo "Customer name is required.";
        }
    }
    mysqli_close($conn);
?>