<?php
require_once('connection.php');

function get_books() {
    global $db;
    $query = "SELECT * FROM book
              ORDER BY id";
    $books = $db->query($query);
    return $books;
}

function deleteBook($ID) {
    global $db;
    $query = "DELETE FROM book
              WHERE id = '$ID'";
        $db->exec($query);
}

function updateBook ($ID) {
    global $db;
    $query = "SELECT * FROM customers
              WHERE customerID = '$customerID'";
    $bookData = $db->query($query);
    $bookData = $bookData->fetch();
    return $bookData;
}

function formUpdateBook($ID, $title, $author, $description) {
    global $db;
    $query = "UPDATE book
              SET
                  title = '$title', author = '$author', description = '$description'
              WHERE id = '$ID' ";
    $db->exec($query);

}
?>
