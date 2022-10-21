<?php
//scacchiera 20*20
echo"<table border = 1> <tr>";
for($i = 0; $i<20; $i++){
	for($j=0; $j<20; $j++){
		if(($i+$j) % 2==0){
			$sfondo="black";
		}
		else $sfondo= "white";
		echo "<td bgcolor= $sfondo width = \"20\" height= '20'></td>";
	}
	echo"</tr>";
}
?>