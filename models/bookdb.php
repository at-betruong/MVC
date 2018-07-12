<?php
require_once('connection.php');
public function getBookList()  
    {  
        // here goes some hardcoded values to simulate the database  
        return array(  
            "1" => new Book(1, "Jungle Book", "R. Kipling", "A classic book."),  
            "2" => new Book(2, "Moonwalker", "J. Walker", ""),  
            "3" => new Book(3, "PHP for Dummies", "Some Smart Guy", "")  
        );  
    }  
      
    public function getBook($id)  
    {  
        // we use the previous function to get all the books and then we return the requested one.  
        // in a real life scenario this will be done through a db select command  
        $allBooks = $this->getBookList();  
        return $allBooks[$id];  
    } 

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