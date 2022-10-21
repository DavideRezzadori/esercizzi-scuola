<?php
 $antipasto = $_POST["antipast"];
 $primi = $_POST["prim"];
 $secondi = $_POST["second"];
 $contorno = $_POST["contorn"];
 $bevande = $_POST["bevand"];
 
 $schei = $antipasto + $primi + $secondi + $contorno + $bevande;
 echo "prezo del pranzo/cena:".$schei."euro";

?>