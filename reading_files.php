<?php
$file = "example.txt";



if($handle = fopen($file,'r')) {
    echo $content = fread($handle, filesize($file)); // koliko karaktera ako stavim broj bice toliko karaktera, ovako ide ceo fajl
    fclose($handle);
} else {
    echo "Error";
}
?>