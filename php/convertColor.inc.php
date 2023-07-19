<?php
function convertColor($hexColor){
        $hexcolor = substr($hexColor,1);
        $numColor = array();
        $numColor[0] = hexdec($hexcolor[0].$hexcolor[1]);
        $numColor[1] = hexdec($hexcolor[2].$hexcolor[3]);
        $numColor[2] = hexdec($hexcolor[4].$hexcolor[5]);
        return $numColor;
    }