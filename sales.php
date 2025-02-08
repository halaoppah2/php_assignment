<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_assignmrnt</title>
</head>
<body>

    <h1 style="text-align: center;">Sales Management</h1>

    <div style="display: flex; gap: 20px; justify-content: center; align-items: center; margin-top: 40px">

    <!-- Customers form -->

        <form action="connect.php" method="post">
            <fieldset style="width: 150px; padding: 20px">
                <legend><b>Customers Form</b></legend>

                <label for="customers_id">Customers ID:</label>
                <input type="number" name="customers_id" id="customers_id" maxlength="11" required><br><br>

                <label for="title">Title:</label>
                <input type="text" name="title" id="title" maxlength="10"><br><br>

                <label for="title">Surname:</label>
                <input type="text" name="surname" id="surname" maxlength="100"><br><br>

                <label for="title">First Name:</label>
                <input type="text" name="fname" id="fname" maxlength="100"><br><br>

                <input type="submit">

                <!-- display button -->

                <button style="position: relative; top: 10px;"><a href="customer_query.php" style="text-decoration: none;">Display Customer Table</a></button>

            </fieldset>
        </form>

    <!-- purchases form -->
    
         <form action="purchases.php" method="post">
            <fieldset style="width: 150px; padding: 20px">
                <legend><b>Purchases Form</b></legend>

                <label for="purchases_id">Purchases ID:</label>
                <input type="number" name="purchases_id" id="purchases_id" maxlength="11" required><br><br>

                <label for="customers_id">Customers ID</label>
                <input type="number" name="customers_id" id="customers_id" maxlength="11" required><br><br>

                <label for="day">Day:</label>
                <input type="number" name="day" id="day" maxlength="11" required><br><br>

                <label for="month">Month:</label>
                <input type="number" name="month" id="month" maxlength="11" required><br><br>

                <label for="year">Year:</label>
                <input type="number" name="year" id="year" maxlength="11" required><br><br>

                <input type="submit">

                <!-- display Purchases -->
                 
                <button style="position: relative; top: 10px;"><a href="purchases_query.php" style="text-decoration: none;">Display Purchases Table</a></button>

            </fieldset>
        </form>

    <!-- products form -->

        <form action="products.php" method="post">
            <fieldset style="width: 150px; padding: 20px">
                <legend><b>Products Form</b></legend>

                <label for="products_id">Products ID:</label>
                <input type="number" name="products_id" id="products_id" maxlength="11" required><br><br>

                <label for="name">Name</label>
                <input type="text" name="name" id="name" maxlength="255"><br><br>

                <label for="description">Description:</label>
                <textarea name="description" id="description"></textarea><br><br>

                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" id="quantity" maxlength="11" required><br><br>

                <label for="cost">Cost:</label>
                <input type="number" name="cost" id="cost" required><br><br>

                <input type="submit">

                <!-- display products -->

                <button style="position: relative; top: 10px;"><a href="products_query.php" style="text-decoration: none;">Display Products Table</a></button>

            </fieldset>
        </form>

    <!-- purchase_product form -->

         <form action="pp.php" method="post">
            <fieldset style="width: 150px; padding: 20px">
                <legend><b>Purchase_Product Form</b></legend>

                <label for="products_id">Products ID:</label>
                <input type="number" name="products_id" id="products_id" maxlength="11" required><br><br>

                <label for="purchases_id">Purchases ID:</label>
                <input type="number" name="purchases_id" id="purchases_id" maxlength="11" required><br><br>

                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" id="quantity" maxlength="11" required><br><br>

                <label for="cost">Cost:</label>
                <input type="number" name="cost" id="cost" maxlength="11" required><br><br>

                <input type="submit">

                <!-- display pp -->

                <button style="position: relative; top: 10px;"><a href="pp_query.php" style="text-decoration: none;">Display PurchaseProduct Table</a></button>

            </fieldset>
        </form>

    </div>

     <!-- logout -->

     <div style="display: flex; gap: 20px; justify-content: center; align-items: center; margin-top: 40px">

     <button><a href="index.php" style="text-decoration: none;">Logout</a></button>

     <!-- display -->

     <button><a href="display.php" style="text-decoration: none;">Display All Tables</a></button>

     </div>

     

    
</body>
</html>