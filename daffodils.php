<?php
$daffodils=array();
for($hundreds=0 ; $hundreds<=9 ;$hundreds ++){
    for($ten=0 ; $ten<=9 ;$ten ++){
        for($digits=0 ;$digits<=9 ;$digits++){
            if(pow($hundreds,3)+pow($ten,3)+pow($digits,3)==100*$hundreds+10*$ten+$digits){
                $daffodils[]=100*$hundreds+10*$ten+$digits;
            }
        }
    }
}
print_r($daffodils);
?>