<?php
$company = array(
    array(1, "Mark", 45000),
    array(2, "Jhon", 55000),
    array(3, "Mia", 65000)
);
for($row=0;$row<=2;$row++){
    for($column=0;$column<=2;$column++){
        echo $company[$row][$column];
    }
    echo "<br />";
}