<?php 
function BredCrumpLinks($url, $text)
{
    return ['url' => $url, 'text' => $text];
}
function getClass($array){
    return $array[app()->getLocale()] ?? '';
}
