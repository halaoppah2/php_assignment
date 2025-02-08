<!DOCTYPE html>
<html>
<head>
    <title>Customer Database</title>
</head>
<body>

<h2>Customers Table</h2>

<?php

// database connection

$conn = mysqli_connect("localhost", "root", "", "sales_management");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection open</br>";
echo "Database is selected</br>";

?>


<!-- Customers Table -->

    <div>
        <table>
            <tr>
                <th>customers_id</th>
                <th>Title</th>
                <th>Surname</th>
                <th>FirstName</th>
            </tr>
         
            <?php
            $query = "SELECT * FROM customers";
            $sldt = mysqli_query($conn, $query);
            if (!$sldt) {
                die("Data not selected: " . mysqli_error($conn));
            }
            while ($row = mysqli_fetch_array($sldt)) {
                echo "<tr>";
                echo "<td>" . $row['customers_id'] . "</td>";
                echo "<td>" . $row['Title'] . "</td>";
                echo "<td>" . $row['Surname'] . "</td>";
                echo "<td>" . $row['FirstName'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>

</body>


<!-- style -->
 
<style>

    h2{
        text-align: center;
    }
    
        table {
            border-collapse: collapse;
            width: 45%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }

</style>

</html>
