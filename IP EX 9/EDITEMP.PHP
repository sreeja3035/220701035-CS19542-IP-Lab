<?php
include "db.php";
$empid = $_GET['empid'];
$sql = "SELECT * FROM empdetails WHERE EMPID = $empid";
$rs = mysqli_query($conn, $sql);
$emp = mysqli_fetch_assoc($rs);

if (!$emp) {
    echo("Employee not found");
    exit();
}

if (isset($_POST['update_emp'])) {
    $ename = $_POST['ename'];
    $desig = $_POST['desig'];
    $dept = $_POST['dept'];
    $doj = $_POST['doj'];
    $salary = $_POST['salary'];

    $update_sql = "UPDATE empdetails SET ENAME='$ename', DESIG='$desig', DEPT='$dept', DOJ='$doj', SALARY='$salary' WHERE EMPID=$empid";
    
    if (mysqli_query($conn, $update_sql)) {
        echo "Employee details updated successfully.";
        header("Location: index.php"); 
        exit();
    } else {
        echo "Error updating employee details: ".mysqli_error($conn);
    }
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<head>
    <title>Edit Employee</title>
    <style>
        .btn{
            margin: auto;
        }
        form{
            width: 40%;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 10px;
            border: 1px solid black;
            border-radius: 10px;
        }
        input{
            padding: 10px;
        }
        
    </style>
</head>

<body>
    <h2>Edit Employee Details</h2>
    <form action="" method="POST" class="btn">
        Name:
        <input type="text" id="ename" name="ename" value="<?php echo $emp['ENAME']; ?>" required><br>

        Designation:
        <input type="text" id="desig" name="desig" value="<?php echo $emp['DESIG']; ?>" required><br>

        Department:
        <input type="text" id="dept" name="dept" value="<?php echo $emp['DEPT']; ?>" required><br>

        Date of Joining:
        <input type="date" id="doj" name="doj" value="<?php echo $emp['DOJ']; ?>" required><br>

        Salary:
        <input type="number" id="salary" name="salary" value="<?php echo $emp['SALARY']; ?>" required><br>

        <input type="submit" name="update_emp" value="Update" class="btn">
    </form>
</body>
</html>