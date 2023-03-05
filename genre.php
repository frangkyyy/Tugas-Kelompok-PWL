<?php
$link = new PDO('mysql:host=localhost;dbname=mydb', 'root', '');
$link->setAttribute(PDO::ATTR_AUTOCOMMIT, false);
$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$query = 'SELECT id, name FROM genre ';
$stmt = $link -> prepare($query);
$stmt->execute();
$result = $stmt -> fetchAll();
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
