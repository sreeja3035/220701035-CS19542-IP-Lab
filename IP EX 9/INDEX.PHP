<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<head>
    <title>Employee Management</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>

<body>
    <h2>Employee Details</h2>
    


    <?php
    // Include database connection
    include 'db.php';
    
    $sql="select*from empdetails";
    $rs= mysqli_query($conn,$sql);
    echo("<table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Department</th>
                <th>DOJ</th>
                <th>Salary</th>
                <th>Action</th>

            </tr>
        </thead>
        <tbody>"
);
    if($rs){
        while($emp=mysqli_fetch_assoc($rs)){
            echo("<tr><td>{$emp['EMPID']}</td>"
            . "<td>{$emp['ENAME']}</td>"
            . "<td>{$emp['DESIG']}</td>"
            . "<td>{$emp['DEPT']}</td>"
            . "<td>{$emp['DOJ']}</td>"
            . "<td>{$emp['SALARY']}</td>"
            . "<td><form action='editEmp.php' method='GET'>
                    <input type='hidden' name='empid' value='{$emp['EMPID']}' >
                    <input type='submit' value='Edit' name='edit_emp'>
              </form></td></tr>");
            
        }
    }

    echo("</tbody></table>");
    mysqli_close($conn);
    ?>
</body>
</html>