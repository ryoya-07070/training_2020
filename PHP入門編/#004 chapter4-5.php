<?php
// 今回は自力で全部書いてみよう！

$input = trim(fgets(STDIN));
$array = explode(",",$input);
$num = count($array);

for($i = 0; $i < $num; $i++){
    echo $array[$i]."さん\n";
}

?>
