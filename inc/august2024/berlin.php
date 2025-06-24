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
        <p class="name-text"> Berlin 2024 </p>
        <p class="subname-text">Posted on <b>8 Aug, 2024</b> by <b>Anna</b></p>
        <p class="description">That was one of the best traveling experiences ever. It was first time when I rode somewhere completely
            alone. Me and my suitcase only! I felt so happy and proud of myself, because I've planned all this trip by myself. From Opole to Antwerp
            (see my next post). A few years ago I was talking with my friend and I said "Okay, now I'm riding to Berlin!" as a joke,
            but now... =)</p>
        <img class="image-big" src="/tpl/images/2024/August/Berlin/IMG_6651.jpg" alt="Brandenburg Gate at night"/>
        <p class="description">Just look at these gates! Oh my god, I've never thought they are so HUGE. It's about 15min walk from
            the main train station (Berlin Hauptahnhof). It didn't feel real. Early on I saw this picture in books, and now I'm here!</p>
        <img class="image-big" src="/tpl/images/2024/August/Berlin/photo_2024-08-08_14-36-54.jpg" alt="Berliner Dom"/>
        <p class="description">Another beautiful place absolutely worth visiting (must!). Located on the Museuminsel, where I've visited almost
            every museum (except of Pergamonmuseum because it's locked by 2030 if I'm not wrong). Grass here is suspiciously soft
            that I fell asleep while was looking at the sky.</p>

        <p class="description">Other pictures you can see below. My next station → Antwerp, Belgium!</p>
        <?php include_once __DIR__ . "/../gallery-roll.php"; ?>

    </div>

    <?php include_once __DIR__ . "/../menu.php"; ?>
</div>

<?php include_once __DIR__ . "/../footer.php"; ?>
</body>

<script src="../../tpl/js/gallery.js"></script>
<script src="../../tpl/js/open_image.js"></script>