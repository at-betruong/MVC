<?php include 'header.php'; ?>
<div id="main">
    <div id="content">
        <form action="." method="GET">
            <input type="hidden" name="action" value="searchBook" />
            <input type="text" name="search" />
            <input type="submit" value="Search" />
        </form>
        <form action="." method="GET">
            <input type="hidden" name="action" value="addBook" />
            <input type="submit" value="ADD" />
        </form>
        <h2> Customer List </h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Descriptiton</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($books as $key => $book) : ?>
            <tr>
                <td><?php echo $book['id'] ?></td>
                <td><?php echo $book['title'] ?></td>
                <td><?php echo $book['author'] ?></td>
                <td><?php echo $book['description'] ?></td>
                <td>
                    <form action="." method="get">
                        <input type="hidden" name="action" value="updateBook" />
                        <input type="hidden" name="ID" value="<?php echo $book['id']; ?>" />
                        <input type="submit" value="Update" />
                    </form>
                </td>
                <td>
                    <form action="." method="post">
                        <input type="hidden" name="action" value="deleteBook" />
                        <input type="hidden" name="ID" value="<?php echo $book['id']; ?>" />
                        <input type="submit" value="Delete" />
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </table>
     </div>
</div>
