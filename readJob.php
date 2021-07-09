<?php 

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

$filter=[];
$options=['projection' => ['_id' => 0, 'Name' => 1, 'Details' => 1]];

$query=new MongoDB\Driver\Query($filter,$options);

$cursor=$manager->executeQuery('BKCC_DB.JobData',$query);

$records = json_encode($cursor->toArray());

echo $records;
?>