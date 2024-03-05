<?php

$vel1 =4;
$vel2 = 7;
$vel3 =5;

$media = ($vel1 + $vel2 + $vel3)/3;
$media = number_format($media, 2);

echo "A media dos números ". $vel1 . ", " . $vel2 . " e ". $vel3 . " é de: ". $media;

?>