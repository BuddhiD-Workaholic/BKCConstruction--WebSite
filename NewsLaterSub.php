<?php

if ((isset($_POST['NewsSub'])) && (($_POST['txtEFAddres'])!='')) {

        $Email = $_POST['txtEFAddres'];

    $bulk = new MongoDB\Driver\BulkWrite();

    $bulk->insert(['email' => $Email]);

    $manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
    $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 100);
    $result = $manager->executeBulkWrite('BKCC_DB.NewsLater', $bulk, $writeConcern);

	header('Location: Index.html?Values_Inserted');
	
}else{
 	header('Location: Index.html?Error!'); 
}
