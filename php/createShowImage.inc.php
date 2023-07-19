<?php
    function createShowImage($image_width,$image_height,$background_color,$text_color, $main_text, $sub_text){
        $image = imagecreate($image_width, $image_height);
    
    // Set the background color of image
    $background_color = imagecolorallocate($image, $background_color[0], $background_color[1], $background_color[2]);
    
    // Set the text color of image
    $text_color = imagecolorallocate($image, $text_color[0],$text_color[1],$text_color[2]);
    
    // Function to create image which contains string.
    imagestring($image, 20, ($image_width*0.45), $image_height/2,  $main_text, $text_color);
    imagestring($image, 5, ($image_width*0.45), ($image_height/2)+10, $sub_text, $text_color);

    // if($image_flip_type == 1 || $image_flip_type == 2 || $image_flip_type == 3){
    //     imageflip($image,$image_flip_type);
    // }
    
    header("Content-Type: image/png");
    
    imagepng($image);
    imagedestroy($image);
    }