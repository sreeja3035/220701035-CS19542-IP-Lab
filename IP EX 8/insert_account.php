<!doctype html>
<html><head><title>Insert Account</title></head>
<body>    
<form action="" method="post">
    Account Type (S or C): <input type="text" name="atype" required><br>
    Balance: <input type="number" name="balance" step="0.01" required><br>
    Customer ID: <input type="number" name="cid" required><br>
    <input type="submit" value="Add Account" name="add_account">
</form>
</body>
</html>

<?php
include 'db.php';

if(isset($_POST['add_account'])){
    $atype = strtoupper($_POST['atype']);
    $balance = $_POST['balance'];
    $cid = $_POST['cid'];

    // first, check if the customer exists in the customer table
    $checkCustomer = "SELECT * FROM CUSTOMER WHERE CID = $cid";
    $customerResult = mysqli_query($conn, $checkCustomer);

    if(mysqli_num_rows($customerResult) > 0) {
        if (($atype == 'S' || $atype == 'C') && $balance >= 0) {
            $sql = "INSERT INTO ACCOUNT (ATYPE, BALANCE, CID) VALUES ('$atype', $balance, $cid)";
            if(mysqli_query($conn, $sql)) {
                echo "New account created successfully.";
            } 
            else{
                echo "Error: ".$sql."<br>".mysqli_error($conn);
            }
        } 
        else {
            echo "Invalid input. Account Type must be 'S' or 'C', and Balance must be non-negative.";
        }
    } 
    else {
        echo "Error: Customer with ID $cid does not exist. Please provide a valid Customer ID.";
    }
}

mysqli_close($conn);
?>
