<?php
$hight=100;   //落下高度可做更改
$landing=5;   //球落下次數
$finalHeight=$hight*(pow(2,-$landing));   //高度*(2*2的負落下次數次方)等於最後落下高度
echo $finalHeight;
?>