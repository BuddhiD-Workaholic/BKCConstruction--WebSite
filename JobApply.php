<?php
if (isset($_POST['JobSubmit'])) {

        $FName = $_POST['txtName'];
        $Pnumber = $_POST['txtPNum'];
        $Email = $_POST['txtLNIC'];
        $CVL = $_POST['txtCV'];
        $DOB = $_POST['txtDOB'];
        
    $bulk = new MongoDB\Driver\BulkWrite();

    $bulk->insert(['Name' => $FName,'Number' => $Pnumber,'Email' => $Email,'Link' => $CVL,'DOB' => $DOB]);

    $manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
    $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 100);
    $result = $manager->executeBulkWrite('BKCC_DB.JobApply', $bulk, $writeConcern);

    header('Location: JobPortal.php?Values_Inserted');
}else {
    header('Location: JobPortal.php?Error');
}
