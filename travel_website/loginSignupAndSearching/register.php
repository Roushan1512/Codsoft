<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$conn = new mysqli('localhost', 'root', '', 'book-db');

if ($conn->connect_error) {
    die('connection failed :' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO signup(`name`, `email`, `password`) values(?,?,?)");
    $stmt->bind_param("sss", $name, $email, $password);
    $stmt->execute();

    $stmt->close();
    $conn->close();
    echo "<script>
    alert('Registered Sucessfully');
    window.location.href='/project/index.html';
    </script>";
}
