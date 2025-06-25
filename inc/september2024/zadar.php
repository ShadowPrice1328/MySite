<?php
    include_once __DIR__ . "/../header.php";
    $month_year = str_split($uri_parts[0], strlen($uri_parts[0]) - 4);
    $location = "Home → Archive → " . ucfirst(htmlspecialchars($month_year[0])) . ' ' . htmlspecialchars($month_year[1]);

    $location .= " → " . "<b>" . ucfirst($uri_parts[1]) . "</b>";

    $directory =  __DIR__ . "/../../tpl/images/" . $month_year[1] . "/" . ucfirst($month_year[0]). "/" . ucfirst($uri_parts[1]);
    $images = glob("$directory/*.{jpg,png,bmp}", GLOB_BRACE);

    $webPath = "/tpl/images/" . ucfirst($month_year[1]) . "/" . ucfirst($month_year[0]) . "/" . ucfirst($uri_parts[1]);
?>

<body>

<p class="location-text"><?= $location ?></p>
<div id="main-container">
    <div class="container">
        <p class="name-text"> Zadar 2024 </p>
        <p class="subname-text">Posted on <b>14 Sep, 2024</b> by <b>Anna</b></p>

        <div class="image-row">
            <img class="image-side" src="/tpl/images/2024/September/Zadar/IMG_7836.jpg" alt="" />
            <img class="image-side" src="/tpl/images/2024/September/Zadar/IMG_8236.jpg" alt="" />
        </div>

        <p class="description">Other pictures you can see below :></p>
        <?php include_once __DIR__ . "/../gallery-roll.php"; ?>
    </div>

    <?php include_once __DIR__ . "/../menu.php"; ?>
</div>

<?php include_once __DIR__ . "/../footer.php"; ?>
</body>

<script src="../../tpl/js/gallery.js"></script>
<script src="../../tpl/js/open_image.js"></script>