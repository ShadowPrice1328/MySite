<?php
include __DIR__ . "/inc/header.php";
?>

<body>

<p class="location-text">Home -> Latest photos</p>
<div id="main-container">
    <div class="container">
        <p class="name-text"> Mountain </p>
        <p class="subname-text">Posted on <b><?php echo date('d M, Y')?></b> by <b>Anna</b></p>
        <img class="image-big" src="tpl/images/ales-krivec.jpg" alt="ales-krivec"/>
        Something is written here xd
    </div>

    <?php include __DIR__ . "/inc/menu.php"; ?>
</div>

<?php include __DIR__ . "/inc/footer.php"; ?>
</body>

