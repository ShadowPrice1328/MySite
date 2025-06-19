<?php
$jpgs  = glob(__DIR__ . "/tpl/images/*.jpg");
$jpegs = glob(__DIR__ . "/tpl/images/*.jpeg");
$pngs  = glob(__DIR__ . "/tpl/images/*.png");

$images = array_merge($jpgs, $jpegs, $pngs);

include __DIR__ . "/inc/header.php";
?>

<body>
<?php
//foreach ($images as $image) {
//    $filename = basename($image);
//    echo '<img src="/tpl/images/'.$filename.'" /><br />';
//}
//?>


</body>
