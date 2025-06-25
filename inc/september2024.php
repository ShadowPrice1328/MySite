<?php
include_once 'header.php';

$month_year = str_split($uri_parts[0], strlen($uri_parts[0]) - 4);
$location = "Home → Archive → " . "<b>" . ucfirst(htmlspecialchars($month_year[0])) . ' ' . htmlspecialchars($month_year[1]) . "</b>";
?>

<body>
<p class="location-text"><?= $location ?></p>
<div id="main-container">
    <div class="container">

        <h3>+ September 2024 +</h3>

        <p class="name-text"> <a href="september2024/zadar">Zadar</a></p>
        <p class="subname-text">Posted on <b>9 Sep, 2024</b> by <b>Anna</b></p>
    </div>

    <?php include "menu.php"; ?>
</div>

<?php include "footer.php"; ?>
</body>
