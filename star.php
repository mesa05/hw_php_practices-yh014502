<?php
function showStars($count){
    $stars="";
    for($i = 0; $i<$count; $i++){    //星星塔高度
        for($j = 0; $j<=$i;$j++){
         $stars.="*";     //產生每層的星星數量
        }
        $stars.="<br>";
    }
        echo $stars;
}
$starsNum=5;    //修改欲產生的星星塔高度
showStars($starsNum);
?>