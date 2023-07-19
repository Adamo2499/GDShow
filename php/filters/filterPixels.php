<?php
$filename = "../images/umg-zloty.png";

header("Content-type: image/png");

$image = imagecreatefrompng($filename);

imagefilter($image,IMG_FILTER_PIXELATE,10);

imagepng($image);
imagedestroy($image);