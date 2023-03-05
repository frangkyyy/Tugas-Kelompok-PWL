<?php
$link = new PDO('mysql:host=localhost;dbname=pwl20222', 'root', '');
$link->setAttribute(PDO::ATTR_AUTOCOMMIT, false);
$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = 'SELECT isbn, title, author, publisher, publish_year, name FROM book INNER JOIN genre ON genre.Id = book.genre_id';
$stmt = $link -> prepare($query);
$stmt->execute();
$result = $stmt -> fetchAll();
$link = null;
?>

<table>
    <thead>
        <tr>
            <th>ISBN</th>
            <th>NAMA GENRE</th>
            <th>TITLE</th>
            <th>AUTHOR</th>
            <th>PUBLISHER</th>
            <th>PUBLISH YEAR</th>
            <th>GENRE NAME</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($result as $book){
            echo '<tr>';
            echo '<td>'. $book['isbn'] . '</td>';
            echo '<td>'. $book['genre_id'] . '</td>';
            echo '<td>'. $book['author'] . '</td>';
            echo '<td>'. $book['publisher'] . '</td>';
            echo '<td>'. $book['publish_year'] . '</td>';
            echo '<td>'. $book['name'] . '</td>'; 
            echo '</tr>';
        }
        ?>
    </tbody>
</table>
