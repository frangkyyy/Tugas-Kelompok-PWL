<?php
$link = new PDO('mysql:host=localhost;dbname=pwl01', 'root', '');
$link->setAttribute(PDO::ATTR_AUTOCOMMIT, false);
$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = 'SELECT isbn, title, author, publisher, publish_year FROM book ';
$stmt = $link -> prepare($query);
$stmt->execute();
$result = $stmt -> fetchAll();
$link = null;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.php">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>

</head>
<body>
<h3>Book Data</h3>
<table class="content-table">
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
</body>
</html>
    </tbody>
</table>
