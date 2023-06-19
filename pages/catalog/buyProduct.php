<?php
$conn = mysqli_connect('localhost', 'root', 'root', 'F5App');
$title = mysqli_real_escape_string($conn, $_POST['title']);
$description = mysqli_real_escape_string($conn, $_POST['description']);
$price = mysqli_real_escape_string($conn, $_POST['price']);
$sql = "INSERT INTO `order` (`title`, `description`, `price`) VALUES ('$title', '$description', '$price')";
mysqli_query($conn, $sql);
mysqli_close($conn);
