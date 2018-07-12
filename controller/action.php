<?php
require('../models/connection.php');
require('../models/bookdb.php');
    $db = new dbObj();
    $connString =  $db->getConnstring();
    $params = $_REQUEST;
    $action = isset($params['action']) != '' ? $params['action'] : '';
    echo var_dump(action);

    switch($action) {
     case 'addBook':
        $books = get_books();
        include '../views/listBook.php';
        break;
     case 'updateBook':
        $ID = $params['id'];
        $books = updateBook($ID);
        include '../views/updateBook.php';
        break;
    case 'formUpdateBook':
        $ID = $params['id']; 
        $title = $params['title']; 
        $author = $params['author']; 
        $description = $params['description']; 
        formUpdateBook($ID, $title, $author, $description);
        $customers = get_customers();
        include '../views/listBook.php';
        break;
     case 'deleteBook':
        $ID = $params['ID'];
        deleteBook($ID);
        $books = get_books();
        include '../views/listBook.php';
        break;
     default:
        $books = get_books();
        include '../views/listBook.php';
     return;
    }
?>
