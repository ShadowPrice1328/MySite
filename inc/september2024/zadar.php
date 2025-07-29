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
        <p class="name-text"> Zadar 2024 </p>
        <p class="subname-text">Posted on <b>14 Sep, 2024</b> by <b>Anna</b></p>

        <p class="description"> The citizens seem a bit sleepy! ^_^</p>
        <img class="image-big" src="/tpl/images/2024/September/Zadar/IMG_7836.jpg" alt="" />

        <p class="description">The road to Nacionalni park Paklenica. You will definitely pass through this bridge (Maslenica Bridge) if you start from Zadar.</p>
        <img class="image-big" src="/tpl/images/2024/September/Zadar/IMG_8236.jpg" alt="Maslenički most" />
        <p class="description" id="main-description"> The Paklenica karst river canyon is a national park in Croatia. It is near Starigrad, northern Dalmatia, on the southern slopes 
            of Velebit mountain. Best place to climb in Croatia! Sadly, I can't climb that good, but I'll fix it! </p>

        <img class="image-big" src="/tpl/images/2024/September/Zadar/IMG_8203.jpg"/>

        <img class="image-big" src="/tpl/images/2024/September/Zadar/IMG_8268.jpg"/>


        <p class="description">Other pictures you can see below :></p>
        <?php include_once __DIR__ . "/../gallery-roll.php"; ?>
    </div>

    <?php include_once __DIR__ . "/../menu.php"; ?>
</div>

<?php include_once __DIR__ . "/../footer.php"; ?>
</body>

<script src="../../tpl/js/gallery.js"></script>
<script src="../../tpl/js/open_image.js"></script>