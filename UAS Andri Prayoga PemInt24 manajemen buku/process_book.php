<?php
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_GET['action'] === 'update') {
        $book_id = $_POST['book_id'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $published_year = $_POST['published_year'];
        $isbn = $_POST['isbn'];

        $sql = "UPDATE tb_atribut SET title='$title', author='$author', published_year='$published_year', isbn='$isbn' WHERE id='$book_id'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location: list_books.php");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>
<?php
include 'db_connection.php';
