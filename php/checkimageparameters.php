<?php
if (isset($_GET["image_width"], $_GET["image_height"], $_GET["bg_color"], $_GET["text_color"], $_GET["main_text"], $_GET["sub_text"])) {
    $image_width = $_GET["image_width"];
    $image_height = $_GET["image_height"];
    $bg_color = $_GET["bg_color"];
    $text_color = $_GET["text_color"];
    $main_text = $_GET["main_text"];
    $sub_text = $_GET["sub_text"];
    // $flip_image_enabled = $_GET["flip_image"];
    // $image_flip_type = $_GET["image_flip_type"];

    $poprawnyFormularz = true;
    
    if(empty($image_width)){
        echo "Podaj długość obrazka!<br>";
        $poprawnyFormularz = false;
    }
    if(intval($image_width) == 0){
        echo "Długość obrazka musi być liczbą!<br>";
    }
    
    if(empty($image_height)){
        echo "Podaj wysokość obrazka! <br>";
        $poprawnyFormularz = false;
    }
    if(intval($image_height) == 0){
        echo "Szerokość obrazka musi być liczbą! <br>";
    }

    // if(isset($_GET["flip_image"])){
    //     $image_flip_type = $_GET["image_flip_type"];
    // }
    // else {
    //     $image_flip_type = 0;
    // }
    // if(empty($bg_color)){
        
    //     $poprawnyFormularz = false;
    // }
    // if (empty($text_color)){
        
    //     $poprawnyFormularz = false;
    // }
    // if(!empty($main_text)){
        
    //     $poprawnyFormularz = false;
    // }
    // if(!empty($sub_text)){
        
    //     $poprawnyFormularz = false;
    // }
    if($poprawnyFormularz){
        require_once("convertColor.inc.php");
        $bg_color_nums = convertColor($bg_color);
        $text_color_nums = convertColor($text_color);
        require_once("createShowImage.inc.php");
        createShowImage($image_width,$image_height,$bg_color_nums,$text_color_nums,$main_text,$sub_text);   
    }

}
