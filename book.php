<?php
$link = new PDO('mysql:host=localhost;dbname=pwl20222', 'root', '');
$link->setAttribute(PDO::ATTR_AUTOCOMMIT, false);
$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = 'SELECT isbn,title,author,publisher,publish_year FROM book JOIN genre ON genre.id = book.genre_id';
$stmt = $link -> prepare($query);
$stmt->execute();
$result = $stmt -> fetchAll();
$link = null;
?>

<table>
    <thead>
        <tr>
            <th>ISBN</th>
            <th>TITLE</th>
            <th>AUTHOR</th>
            <th>PUBLISHER</th>
            <th>PUBLISH YEAR</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($result as $book){
            echo '<tr>';
            echo '<td>'. $book['isbn'] . '</td>';
            echo '<td>'. $book['title'] . '</td>';
            echo '<td>'. $book['author'] . '</td>';
            echo '<td>'. $book['publisher'] . '</td>';
            echo '<td>'. $book['publish_year'] . '</td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>