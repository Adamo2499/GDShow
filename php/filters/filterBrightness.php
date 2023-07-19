<?php
$filename = "../images/umg-zloty.png";

header("Content-type: image/png");

$image = imagecreatefrompng($filename);

imagefilter($image,IMG_FILTER_BRIGHTNESS,255);

imagepng($image);
imagedestroy($image);