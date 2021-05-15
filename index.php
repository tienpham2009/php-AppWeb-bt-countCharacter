<?php
$string = "lfmrmrdllfmrdfslrllmmlmrd";
$characterL = 'm';
$count = 0;

for ($i = 0 ; $i < strlen($string) ; $i++){
    if ($string[$i] == $characterL){
        $count++;
    }
}

echo "String: "."$string "."have: ". $count." character: ".$characterL;