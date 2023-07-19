<?php
$filename = "../images/umg-zloty.png";

header("Content-type: image/png");

$image = imagecreatefrompng($filename);

imageflip($image,IMG_FLIP_HORIZONTAL);

imagepng($image);
imagedestroy($image);