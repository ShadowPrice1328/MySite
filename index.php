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

<p class="location-text">Home → <b>Latest post</b></p>
<div id="main-container">
    <div class="container"></div>

    <?php include_once __DIR__ . "/inc/menu.php"; ?>
</div>

<?php include_once __DIR__ . "/inc/footer.php"; ?>
</body>

<script src="../../tpl/js/open_image.js"></script>
<script src="../../tpl/js/get_main_desc.js"></script>
<script src="../../tpl/js/get_latest_post.js"></script>