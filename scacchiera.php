<?php
//scacchiera 20*20
$n =0;
echo"<table border = 3> <tr>";
for($i = 0; $i<20; $i++){
	for($j=0; $j<20; $j++){
		if(($i+$j) % 2==0){
			$sfondo="blue";
		}
		else $sfondo= "red";
		echo "<td bgcolor= $sfondo width = \"20\" height= '20'>$n</td>";
		$n += 3;
	}
	echo"</tr>";
}
?>