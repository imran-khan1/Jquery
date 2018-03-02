<?php

$json_data2 = '{"employees":[
    {"firstName":"John", "lastName":"Doe"},
    {"firstName":"Anna", "lastName":"Smith"},
    {"firstName":"Peter", "lastName":"Jones"}
]}';
$data2 = json_decode($json_data2);
echo "<br>";
echo $data2->employees[0]->firstName;