<?php include('connection.php');

$sql = "INSERT INTO users (username, email, password,role)
VALUES ('kyt','yato@gmail.com','yato','role')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>