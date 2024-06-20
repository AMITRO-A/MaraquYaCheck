<?php
session_start();

// подрубаем базу
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "maracuya";

//коннектимся
$conn = new mysqli($servername, $username, $password, $dbname);

//если что то не то
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//запрашиваем
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "INSERT INTO users (username, password) VALUES ('$user', '$pass')";
    if ($conn->query($sql) === TRUE) {
        $_SESSION['username'] = $user;
        header('Location: main.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
//обяз закрыть 
$conn->close();
?>
