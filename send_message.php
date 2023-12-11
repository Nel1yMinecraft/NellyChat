<?php
// 连接到数据库
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 获取发送的消息
$message = $_POST["message"];

// 插入消息到数据库
$sql = "INSERT INTO messages (username, message) VALUES ('User', '$message')";
$conn->query($sql);

$conn->close();
?>
