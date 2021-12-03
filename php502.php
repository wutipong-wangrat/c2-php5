<?php
$season = array("summer","winter","spring","autumn");
echo $count = count($season);
echo "<br />";
// for($i = 0 ; $i <= $count-1; $i=$i+1){
//     echo $season[$i];
//     echo "<br />";
// }


foreach($season as $i){
    echo $i;
    echo "<br />";
}