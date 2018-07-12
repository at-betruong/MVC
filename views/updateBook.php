<?php include 'header.php'; ?>
<div id="main">
    <div id="content">
        <h2> Update Book </h2>
        <form action="../controller/action.php" method="post" id="aligned">
            <input type="hidden" name="action" value="formUpdateBook" />
            <input type="hidden" name="customerID" id="customerID" />
            <label for="id">ID :</label>
            <input type="text" name="id" id="id" autofocus></br>
            <label for="title">Title :</label>
            <input type="text" name="title" id="title"></br>
            <label for="author">Author:</label>
            <input type="text" name="author" id="author"></br>
            <label for="description">Description :</label>
            <input type="text" name="description" id="description"></br>
            <input type="submit" value="Update Customer">
        </form>
    </div>
</div>