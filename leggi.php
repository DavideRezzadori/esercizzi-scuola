<? php
 $giorno = $_POST["giorno"];
 $mese = $_POST["mese"];
 $anno = $_POST["anno"];
 $data = $giorno+ "" +$mese+ "" +$anno;
function giorno($data){
 
    $d_ex=explode("-", $d);
    $d_ts=mktime(0,0,0,$d_ex[1],$d_ex[2],$d_ex[0]);
    $num_gg=(int)date("N",$d_ts);
    $giorno1=array('','lunedì','martedì','mercoledì','giovedì','venerdì','sabato','domenica');
    return $giorno[$num_gg];
}

$data="2016-07-03";
echo giorno($data);
?>