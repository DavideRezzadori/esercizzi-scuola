<?php

$file = fopen("archivio.txt","a");

if(!$file){

    die("Errore apertura file");

}
foreach($_POST as $key => $value){

    fwrite($file,str_pad($value,20,""));

}

fwrite($file,"\n");
fclose($file);

echo "Dati salvati correttamente";
?>