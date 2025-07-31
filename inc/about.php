<?php
    include_once "path_combiner.php";
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <title>Anna Sonchak | About</title>
</head>
<body>
    <?php 
        include_once "header.php";
    ?>

    <p class="location-text"><?= $location ?></p>
    <div id="main-container">
        <div class="container">
            <p class = "description">Welcome!</p>
            <p class = "description"> Yes, this is my website. It is some kind of diary where I share not only photos of cities I visit but also my thoughts.</p>
            <p class = "description">
                I almost forgot to write who I am. As of today (29.07.2025), I am a Computer Engineering student. I'm 20 years old, and as you can probably tell, 
                I like old-school stuff like this simple website written in PHP without any frameworks and running on Apache HTTP Server. 
                Honestly, I hate the design of modern pages — it has no soul. But this! Just look at this! :D
            </p>
            <p class = "description">
                I'm ukrainian and if you support russia - <b>GET THE HELL OUT HERE</b>, you are NOT welcome!
            </p>
            <p class = "description">
                What do I like? I have a few hobbies: climbing, reading, playing video games, learning languages (I know Ukrainian, English, Polish, <s>russian</s>, 
                and a little bit of German), and of course, hitting the gym. I'm a strong woman! I like to repair things; when something breaks, I am the one who
                will try to fix it until late at night. Also, I drive a car.
            </p>
            <p class = "description">I am absolutelly cat person. Winter is better than summer and night is better than the morning.</p>
            <p class = "description">Bye. </br> </br>
            <img src="../tpl/images/meme.jpg" id="meme-img"/>
        </div>
        <?php include_once "menu.php";?>
    </div>

    <?php include_once "footer.php"; ?>
</body>
</html>