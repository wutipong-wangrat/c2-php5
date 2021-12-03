<?php
//Associative
$salary = array("Mark"=>"35000","Jhon"=>"45000","Mia"=>"55000");

echo "$salary[Mark]<br />";
echo "$salary[Jhon]<br />";
echo $salary["Mia"];

for($i = 0; $i<count($salary);$i++){
    echo $people[$i]['Mia'];
}
