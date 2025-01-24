<!-- purchase_product connection -->

<?php
	$products_id = $_POST['products_id'];
    $purchases_id = $_POST['purchases_id'];
	$quantity = $_POST['quantity'];
	$cost = $_POST['cost'];

	// Database connection
	$conn = new mysqli('localhost','root','','sales_management');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into purchaseproducts(products_id, purchases_id, Quantity, Cost) values(?, ?, ?, ?)");
		$stmt->bind_param("iiid", $products_id, $purchases_id, $quantity, $cost);
		$execval = $stmt->execute();
		echo $execval;
		echo "Record updated successfully...";
		$stmt->close();
		$conn->close();
	}
?>