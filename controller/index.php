<?php
require('../models/connection.php');
require('../models/bookdb.php');

$db = new dbObj();
    $connString =  $db->getConnstring();

    $params = $_REQUEST;
    
    $action = isset($params['action']) != '' ? $params['action'] : '';

    switch($action) {
     case 'updateBook':
        $ID = $params['ID'];
        $books = updateBook($ID);
        include '../views/updateBook.php';
        break;
    case 'formUpdateBook':
        $ID = $params['id']; 
        $title = $params['title']; 
        $author = $params['author']; 
        $description = $params['description']; 
        formUpdateBook($ID, $title, $author, $description);
        $books = get_books();
        include '../views/listBook.php';
        break;
    case 'deleteBook':
        $ID = $params['ID'];
        $books = deleteBook($ID);
        include '../views/listBook.php';
        break;
    case 'searchBook':
    	$contentSearch = $params['search'];
    	$books = search($contentSearch);
    	include '../views/listBook.php';
    	break;
    default:
        $books = get_books();
        include '../views/listBook.php';
    return;
    }
?>
