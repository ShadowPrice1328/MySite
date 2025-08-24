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
            So, uh... yeah? I've decided to visit Rome. Somehow I've managed to book flight tickets for my birthday (it's August 15) so
            you can interpret this as my birthday trip. To be honest, I even forgot that it's my birthday, but let's not talk about this :')
        </p>
        <div class="image-row">
            <img class="image-side" src="/tpl/images/2025/August/Rome/photo_2025-08-14_11-22-55.jpg" alt="Colosseum">
            <img class="image-side" src="/tpl/images/2025/August/Rome/IMG_3168.jpg" alt="Colosseum at nigth"/>
        </div>

        <p class="description">
            Here! The most recognizable symbol of the city, of the center of Roman empire. It's hard to image how many people and animals were killed back then.
            Actually, there is a floor beneath, where hundreds of people were working to lift animals up to the scene. Wolves, bears, tigers, even whales(?). Someone
            told me this and I don't believe it, but nevermind.
        </p>

        <p class="description">
            It has been rebuilt many times, but it's now ruined due to lots of earthquackes and fires. But... also because some imperators ordered to get precious metals out of the walls (you can
            see lots of holes in them). Almost everything is destroyed although you still can feel how powerful and importand this place was.
        </p>

        <img class="image-big" src="/tpl/images/2025/August/Rome/IMG_2899.jpg" alt="Trevi Fountain"/>
        <p class="description">
            The Trevi Fountain. Considered as the most beautiful fonutain in the world and I can see why. It's huge! And very beautiful. Unique. 
            Designed by Nicola Salvi. In the middle you can see Neptune, the god of freshwater and the sea, standing on a shell-shaped chariot drawn by a pair
            of seahorses led by two tritons.
        </p>

        <div class="image-row">
            <img class="image-side" src="/tpl/images/2025/August/Rome/IMG_3411.jpg" alt="White and black cat laying on the rock">
            <img class="image-side" src="/tpl/images/2025/August/Rome/IMG_2730.jpg" alt="Sparrow standing on the ground">
        </div>  

        <p class="description" style="font-size: 2rem;">
            &#128008; &#128038;
        </p>

        <p class="description" id="end">Other pictures you can see below.</p>
        <?php include_once __DIR__ . "/../gallery-roll.php"; ?>

    </div>

    <?php include_once __DIR__ . "/../menu.php"; ?>
</div>

<?php include_once __DIR__ . "/../footer.php"; ?>
</body>

<script src="../../tpl/js/gallery.js"></script>
<script src="../../tpl/js/open_image.js"></script>