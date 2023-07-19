<?php
$filename = "./images/umg-zloty.png";

header("Content-type: image/png");

$image = imagecreatefrompng($filename);

// imageflip($image,IMG_FLIP_BOTH);

imagepng($image);
imagedestroy($image);