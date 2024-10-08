<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Banking Application</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: whitesmoke;
            text-align: center;
        }
        .container {
            margin: 50px auto;
            padding: 20px;
            max-width: 500px;
            background-color: white;
            box-shadow: 0 0 10px gray;
            border-radius: 10px;
        }
        .button {
            display: block;
            margin: 10px 0;
            padding: 20px 20px;
            background-color: #5CC4E4;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .button:hover {
            background-color: #59A8C1;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Banking Application</h1>
        <p>Welcome to the PHP Banking Application.</p>

        <a href="display_customer.php" class="button">View Customers</a>

        <a href="display_account.php" class="button">View Accounts</a>

        <a href="insert_customer.php" class="button">Add Customer</a>

        <a href="insert_account.php" class="button">Add Account</a>

    </div>

</body>
</html>
