<!DOCTYPE html>
<html>
<head>
    <title>P_P Database</title>
</head>
<body>

<h2>PurchaseProduct Table</h2>

<?php
$conn = mysqli_connect("localhost", "root", "", "sales_management");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connection open</br>";
echo "Database is selected</br>";
?>
    
    <!-- Products Table -->
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

<style>
    h2{
        text-align: center;
    }
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

</html>
