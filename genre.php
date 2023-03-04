<?php
$link = new PDO(dsn: 'mysql:host=localhost;dbname=pwl20222', username: 'root', password: 'root_password');
$link->setAttribute(attribute: PDO::ATTR_AUTOCOMMIT, value: false);
$link->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);
$query = 'SELECT id, name FROM genre';
$stmt = $link->prepare($query);
$result = $stmt->fetchAll();
$link = null;
?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
    </thead>
</table>
<tbody>
    <?php
    foreach ($result as $genre) {
        echo '<tr>';
        echo '<td>' . $genre['id'] . '</td>';
        echo '<td>' . $genre['name'] . '</td>';
        echo '</tr>';
    }
    ?>
</tbody>
