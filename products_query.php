<!DOCTYPE html>
<html>
<head>
    <title>Products Database</title>
</head>
<body>

<h2>Products Table</h2>

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
                <th>products_id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Cost</th>
            </tr>
            <?php
            $query = "SELECT * FROM products";
            $sldt = mysqli_query($conn, $query);
            if (!$sldt) {
                die("Data not selected: " . mysqli_error($conn));
            }
            while ($row = mysqli_fetch_array($sldt)) {
                echo "<tr>";
                echo "<td>" . $row['products_id'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Description'] . "</td>";
                echo "<td>" . $row['Quantity'] . "</td>";
                echo "<td>" . $row['Cost'] . "</td>";
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
