<body>
<nav>
    <ul>
        <li><a href="?menu=home">Home</a></li>
        <li><a href="?menu=genre">Genre</a></li>
        <li><a href="?menu=book">Book</a></li>
    </ul>
</nav>
</nav>
<main>
    <?php
    $navigation = filter_input(INPUT_GET, 'menu');
    switch ($navigation) {
        case 'home':
            include_once 'home.php';
            break;
        case 'genre':
            include_once 'genre.php';
            break;
        case 'book':
            include_once 'book.php';
            break;
        default:
            include_once 'home.php';
    }
    ?>
</main>
</body>
</html>
