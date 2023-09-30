<?php
$dir    = __DIR__ . "/database";
$files1 = scandir($dir);
$files2 = scandir($dir, 1);
print_r($files1);
