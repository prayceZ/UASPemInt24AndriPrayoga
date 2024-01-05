<?php
include 'db_connection.php';

$sql = "SELECT * FROM tb_atribut";
$result = mysqli_query($conn, $sql);
$books = mysqli_fetch_all($result, MYSQLI_ASSOC);

include 'list_books_view.php';
?>
