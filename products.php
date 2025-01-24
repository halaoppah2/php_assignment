<!-- products connection -->

<?php
	$products_id = $_POST['products_id'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$quantity = $_POST['quantity'];
	$cost = $_POST['cost'];

	// Database connection
	$conn = new mysqli('localhost','root','','sales_management');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into products(products_id, Name, Description, Quantity, Cost) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("issid", $products_id, $name, $description, $quantity, $cost);
		$execval = $stmt->execute();
		echo $execval;
		echo "Record updated successfully...";
		$stmt->close();
		$conn->close();
	}
?>