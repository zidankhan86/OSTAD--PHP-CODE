

<?php

$file = fopen("./data.txt","a");
fwrite($file,"\nHello This is my first File in Php W,W+,a,r,r+");
fclose($file);