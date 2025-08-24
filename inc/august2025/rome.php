<?php
    include_once __DIR__ . "/../header.php";
    include_once __DIR__ . "/../path_combiner.php";

    $directory =  __DIR__ . "/../../tpl/images/" . $year . "/" . ucfirst($month) . "/" . ucfirst($uri_parts[1]);
    $images = glob("$directory/*.{jpg,png,bmp}", GLOB_BRACE);

    $webPath = "/tpl/images/" . $year . "/" . ucfirst($month). "/" . ucfirst($uri_parts[1]);
?>

<body>

<p class="location-text"><?= $location ?></p>
<div id="main-container">
    <div class="container">
        <p class="name-text"> Rome 2025 </p>
        <p class="subname-text">Posted on <b>24 Aug, 2025</b> by <b>Anna</b></p>
        <p class="description" id="main-description">

        </p>
        <img class="image-big" src="/tpl/images/2025/August/Rome/IMG_3168.jpg" alt="Colosseum at nigth"/>
        <p class="description">

        </p>
        <img class="image-big" src="/tpl/images/2025/August/Rome/IMG_2899.jpg" alt="Trevi Fountain"/>
        <p class="description">

        </p>

        <div class="image-row">
            <img class="image-side" src="/tpl/images/2025/August/Rome/IMG_3411.jpg" alt="White and black cat laying on the rock">
            <img class="image-side" src="/tpl/images/2025/August/Rome/IMG_2730.jpg" alt="Sparrow standing on the ground">
        </div>  

        <p class="description">Other pictures you can see below.</p>
        <?php include_once __DIR__ . "/../gallery-roll.php"; ?>

    </div>

    <?php include_once __DIR__ . "/../menu.php"; ?>
</div>

<?php include_once __DIR__ . "/../footer.php"; ?>
</body>

<script src="../../tpl/js/gallery.js"></script>
<script src="../../tpl/js/open_image.js"></script>