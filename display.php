<!DOCTYPE html>
<html>
<head>
    <title>Create Database</title>
    <style>
        .table-container {
            display: flex;
            gap: 20px; /* Adds space between tables */
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
</head>
<body>

<?php
$conn = mysqli_connect("localhost", "root", "", "sales_management");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection open</br>";
echo "Database is selected</br>";
?>

<div class="table-container">
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

    <!-- Products Table -->
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


    <!-- Purchases Table -->
    <div>
        <table>
            <tr>
                <th>produchaes_id</th>
                <th>Customers_id</th>
                <th>Day</th>
                <th>Month</th>
                <th>Year</th>
            </tr>
            <?php
            $query = "SELECT * FROM purchases";
            $sldt = mysqli_query($conn, $query);
            if (!$sldt) {
                die("Data not selected: " . mysqli_error($conn));
            }
            while ($row = mysqli_fetch_array($sldt)) {
                echo "<tr>";
                echo "<td>" . $row['purchases_id'] . "</td>";
                echo "<td>" . $row['customers_id'] . "</td>";
                echo "<td>" . $row['Day'] . "</td>";
                echo "<td>" . $row['Month'] . "</td>";
                echo "<td>" . $row['Year'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>



</div>


<div class="table-container" style="position: relative; top: 20px; margin-bottom: 50px;">

<!-- Purchaseproduct Table -->
<div>
        <table>
            <tr>
                <th>products_id</th>
                <th>purchases_id</th>
                <th>Quantity</th>
                <th>Cost</th>
            </tr>
            <?php
            $query = "SELECT * FROM purchaseproducts";
            $sldt = mysqli_query($conn, $query);
            if (!$sldt) {
                die("Data not selected: " . mysqli_error($conn));
            }
            while ($row = mysqli_fetch_array($sldt)) {
                echo "<tr>";
                echo "<td>" . $row['products_id'] . "</td>";
                echo "<td>" . $row['purchases_id'] . "</td>";
                echo "<td>" . $row['Quantity'] . "</td>";
                echo "<td>" . $row['Cost'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</div>

</body>
</html>
