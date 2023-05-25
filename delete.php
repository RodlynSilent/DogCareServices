<?php
require_once 'db_helper.php';

$deleteMapping = [
    'medical_record_id' => 'delete_medical_record',
];

foreach ($deleteMapping as $param => $method) {
    if (isset($_GET[$param])) {
        $id = $_GET[$param];
        $db = new DBHelper(DBHelper::getConnection());
        $db->$method($id);
        $_SESSION["message"] = "Successfully Deleted";
        break;
    }
}

header("Location: index.php");
