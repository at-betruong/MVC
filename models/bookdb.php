<?php
require_once('connection.php');

$db = new dbObj();
$connString =  $db->getConnstring();
$params = $_REQUEST;
$action = isset($params['action']) != '' ? $params['action'] : '';

function get_books() {
    global $connString;
    $query = "SELECT * FROM book
              ORDER BY id";
    $books = $connString->query($query);
    return $books;
}
function insertBook($ID, $title, $author, $description) {
    global $connString;
    $query = "INSERT INTO book VALUES (".$ID.", '".$title."' , '".$author."' , '".$description."' )";
    $connString->query($query);
}
function deleteBook($ID) {
    global $connString;
    $query = "DELETE FROM book
              WHERE id = ".$ID;
    $connString->query($query);
    $book = get_books();
    return $book;
}

function updateBook ($ID) {
    global $connString;
    $query = "SELECT * FROM book
              WHERE id = ".$ID;
    $bookData = $connString->query($query);
    return $bookData;
}

function formUpdateBook($ID, $title, $author, $description) {
    global $connString;
    $query = "UPDATE book
              SET
                  title = '$title', author = '$author', description = '$description'
              WHERE id = '$ID' ";
    $connString->query($query);

}
function search ($contentSearch) {
    global $connString;
    $query = "SELECT * FROM book
              WHERE
                  id = '$contentSearch' OR title = '$contentSearch' OR author = '$contentSearch'OR description = '$contentSearch' ";
    $books = $connString->query($query);
    return $books;
}
?>
