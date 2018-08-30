<?php
$file = fopen("2018-08-29-2.txt", "w");
$txt = "hello\n";
fwrite($file, $txt);
fclose($file);

?>