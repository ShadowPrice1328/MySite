<?php
    include_once __DIR__ . "/../header.php";
    $month_year = str_split($uri_parts[0], strlen($uri_parts[0]) - 4);
    $location = "Home -> Archive -> " . ucfirst(htmlspecialchars($month_year[0])) . ' ' . htmlspecialchars($month_year[1]);

    $location .= " -> " . ucfirst($uri_parts[1]);
?>

<body>

<p class="location-text"><?= htmlspecialchars($location)?></p>
<div id="main-container">
    <div class="container">
        <p class="name-text"> Berlin 2024 </p>
        <p class="subname-text">Posted on <b>8 Aug, 2024</b> by <b>Anna</b></p>
        <img class="image-big" src="/tpl/images/2024/August/Berlin/IMG_6651.jpg" alt="Brandenburg Gate at night"/>
        Something is written here xd
    </div>

    <?php include_once __DIR__ . "/../menu.php"; ?>
</div>

<?php include_once __DIR__ . "/../footer.php"; ?>
</body>