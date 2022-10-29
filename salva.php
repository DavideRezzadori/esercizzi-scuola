<?php
 $file = fopen("archivio.txt","r");

 if (!$file){
    die("Errore apertura del file");
 }

 $matricola = $_POST["matricola"];
 $spazio = "";

 while(!feof($file)){
    //ottengo la riga del file
    $riga = fgets($file);
    //ottengo la matricola come sottostringa
    $sottostringa = substr($riga,40,20);
    //tolgo gli spazi bianchi a destra con rtim
    $matrFile = rtrim($sottostringa,$spazio = "\n");

    if($matricola == $matrFile){
        echo "$riga <br>";
    }


 }
 fclose($file);
?>