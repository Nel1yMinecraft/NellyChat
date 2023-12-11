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

// 获取消息
$sql = "SELECT * FROM messages ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div><strong>" . $row["username"] . ":</strong> " . $row["message"] . "</div>";
    }
} else {
    echo "暂无消息";
}

$conn->close();
?>
