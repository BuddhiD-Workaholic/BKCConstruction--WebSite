<?php
if (isset($_POST['ContactSubmit'])) {

        $FName = $_POST['txtFName'];
        $LName = $_POST['txtLName'];
        $Email = $_POST['txtEmail'];
        $Sub = $_POST['txtSubject'];
        $Message = $_POST['txtMessage'];
        
    $bulk = new MongoDB\Driver\BulkWrite();

    $bulk->insert(['FirstN' => $FName,'LastN' => $LName,'Email' => $Email,'Subject' => $Sub,'Message' => $Message]);

    $manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
    $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 100);
    $result = $manager->executeBulkWrite('BKCC_DB.ContactData', $bulk, $writeConcern);

     header('Location: Contact US.html?Values_Inserted'); 
}else{
    header('Location: Contact US.html?Error'); 
}
