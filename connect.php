<!-- customers connection -->

<?php
	$customers_id = $_POST['customers_id'];
	$title = $_POST['title'];
	$surname = $_POST['surname'];
	$fname = $_POST['fname'];

	// Database connection
	$conn = new mysqli('localhost','root','','sales_management');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into customers(customers_id, Title, Surname, FirstName) values(?, ?, ?, ?)");
		$stmt->bind_param("isss", $customers_id, $title, $surname, $fname);
		$execval = $stmt->execute();
		echo $execval;
		echo "Record updated successfully...";
		$stmt->close();
		$conn->close();
	}
?>