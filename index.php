<?php
$uri = $_SERVER['REQUEST_URI'];
$uri_parts = explode('/', trim($uri, '/'));
$destination_url = __DIR__ . '/inc';

if (isset($uri_parts[0]) && $uri_parts[0] !== '') {
    foreach ($uri_parts as $uri_part) {
        $destination_url .= '/' . $uri_part;
    }
    $destination_url .= '.php';

    if (file_exists($destination_url)) {
        include $destination_url;
    } else {
        header("Location: /404");
        exit;
    }

    exit;
}

include_once __DIR__ . '/inc/header.php';
?>

<body>

<p class="location-text">Home → <b>Latest photos</b></p>
<div id="main-container">
    <div class="container">
        <p class="name-text"> Mountain </p>
        <p class="subname-text">Posted on <b><?php echo date('d M, Y')?></b> by <b>Anna</b></p>
        <img class="image-big" src="tpl/images/ales-krivec.jpg" alt="ales-krivec"/>
        <p class="description">Something is written here xd</p>
    </div>

    <?php include_once __DIR__ . "/inc/menu.php"; ?>
</div>

<?php include_once __DIR__ . "/inc/footer.php"; ?>
</body>

<script src="../../tpl/js/open_image.js"></script>