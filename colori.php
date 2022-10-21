<?php
$nomi = ['Antonio', 'Luca','Marco','Giovanni','Mario','Matteo','Mattia','Emanuele','Toni','Davide'];
$colori = ['red', 'green','blue','yellow','pink','grey','orange','black','purple','cyan'];
for($i=0;$i<10;$i++){
	echo "<h1 style = color:$colori[$i]>$nomi[$i]</h1>";
}
?>