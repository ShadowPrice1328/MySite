<?php
include_once 'header.php';

$month_year = str_split($uri_parts[0], strlen($uri_parts[0]) - 4);
$location = "Home → Archive → " . "<b>" . ucfirst(htmlspecialchars($month_year[0])) . ' ' . htmlspecialchars($month_year[1]) . "</b>";
?>

<body>
<p class="location-text"><?= $location ?></p>
<div id="main-container">
    <div class="container">

        <h3>+ August 2024 +</h3>

        <p class="name-text"> <a href="august2024/berlin">Berlin</a></p>
        <p class="subname-text">Posted on <b>8 Aug, 2024</b> by <b>Anna</b></p>
        <p class="main-description"></p>

        <p class="name-text"> <a href="august2024/antwerp">Antwerp</a></p>
        <p class="subname-text">Posted on <b>9 Aug, 2024</b> by <b>Anna</b></p>
        <p class="main-description"></p>

    </div>

    <?php include "menu.php"; ?>
</div>

<?php include "footer.php"; ?>
</body>

<script src="../../tpl/js/get_main_desc.js"></script>