<?php
    // Create the size of image or blank image
    $image = imagecreate(500, 300);
    
    // Set the background color of image
    $background_color = imagecolorallocate($image, 0, 153, 0);
    
    // Set the text color of image
    $text_color = imagecolorallocate($image, 255, 255, 255);
    
    // Function to create image which contains string.
    imagestring($image, 5, 150, 100,  "Testowy glowny napis", $text_color);
    //imagettftext($image, 5, 180, 100,  "Test", $text_color);
    imagestring($image, 3, 160, 120,  "Testowy poboczny napis", $text_color);
    
    header("Content-Type: image/png");
    
    imagepng($image);

    imagejpeg($im, 'simpletext.png');

    imagedestroy($image);