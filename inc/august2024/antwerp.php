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
        <p class="name-text"> Antwerp 2024 </p>
        <p class="subname-text">Posted on <b>9 Aug, 2024</b> by <b>Anna</b></p>
        <p class="description">The next day after Berlin (my beloved) I took a ride to Antwerp from the main train station.
            My friends invited me to their country, we haven't seen each other for 10(?) years, of course I agreed!
        </p>
        <p class="description"> Thanks god I took a reservation at night train, I mean I was so tired, that I would have died till the morning if I hadn't had a 
            good sleep. I had a good neighbours, it wasn't noisy in here, so I get into my bed and fell asleep. Next morning was beautiful.
        </p>
        <img class="image-big" src="/tpl/images/2024/August/Antwerp/IMG_7338.jpg" alt="Antwepr statue - Brabo fountain" style="width: 60%"/>
        <p class="description">That's the main train station in Antwepr. If I'm not wrong, it has a place in the list of the most beatiful stations in the world.
            Of course it is.
        </p>
        <div class="image-row">
            <img class="image-side" src="/tpl/images/2024/August/Antwerp/IMG_7387.jpg" alt="Antwerp statue - Brabo fountain" />
            <img class="image-side" src="/tpl/images/2024/August/Antwerp/IMG_7379.jpg" alt="Antwerp statue - Brabo fountain" />
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