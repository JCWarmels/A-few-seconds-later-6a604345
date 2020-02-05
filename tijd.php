<?php

$haystack = $argv[1];
$needle = strpos($haystack, "s");
$needle2 = strpos($haystack, "m");
$time = (int)$argv[1];
if($needle){
    echo("$time seconden");
}
else if($needle2){
    echo("$time minuten");
}

?>