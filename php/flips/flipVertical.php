<?php
$filename = "../images/umg-zloty.png";

header("Content-type: image/png");

$image = imagecreatefrompng($filename);

imageflip($image,IMG_FLIP_VERTICAL);

imagepng($image);
imagedestroy($image);