<!-- purchases connection -->

<?php
	$purchases_id = $_POST['purchases_id'];
	$customers_id = $_POST['customers_id'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];

	// Database connection
	$conn = new mysqli('localhost','root','','sales_management');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into purchases(purchases_id, customers_id, Day, Month, Year) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("iiiii", $purchases_id, $customers_id, $day, $month, $year);
		$execval = $stmt->execute();
		echo $execval;
		echo "Record updated successfully...";
		$stmt->close();
		$conn->close();
	}
?>