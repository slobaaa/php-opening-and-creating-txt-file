<?php
$file = "example.txt";



if($handle = fopen($file,'w')) {
    fwrite($handle, 'neki tekst');
    fclose($handle);
} else {
    echo "Error";
}
?>