<?php 
	require_once("db.php");
	if (isset($_POST["product_name"], $_POST["product_description"])) {
		$productName = mysqli_real_escape_string($conn, $_POST["product_name"]);
		$productDescription = mysqli_real_escape_string($conn, $_POST["product_description"]);
		// echo "$product_name $product_description";
		$sql = "INSERT INTO products (name, description) VALUES('$productName', '$productDescription')";
		if ($conn->query($sql) === TRUE) {
			  echo "New record created successfully";
			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
}
?>