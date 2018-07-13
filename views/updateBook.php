<?php include 'header.php'; ?>
<div id="main">
    <div id="content">
        <h2> Update Book </h2>
        <form action="." method="post" id="aligned" >
            <?php foreach ($books as $key => $book) :  ?>
            <input type="hidden" name="action" value="formUpdateBook" />
            <input type="hidden" name="ID" id="ID" />
            <label for="id">ID :</label>
            <input type="text" name="id" id="id" value="<?php echo $book['id'] ?>" autofocus></br>
            <label for="title">Title :</label>
            <input type="text" name="title" id="title" value="<?php echo $book['title'] ?>" ></br>
            <label for="author">Author:</label>
            <input type="text" name="author" id="author"  value="<?php echo $book['author'] ?>" ></br>
            <label for="description">Description :</label>
            <input type="text" name="description" id="description" value="<?php echo $book['description'] ?>" ></br>
            <input type="submit" value="Update Book">
            <?php endforeach; ?>
        </form>
    </div>
</div>
