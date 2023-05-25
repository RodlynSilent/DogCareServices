<?php

include "database.php";

class DBHelper extends Database
{
    function __construct($conn)
    {
        $this->conn = $conn;
    }

    function add_medicalrecord($dog_ID, $ownername, $customer_ID, $veterinarian_ID, $date_of_treatment)
    {
        return $this->query("INSERT INTO tblmedicalrecord (id, dog_ID, ownername, customer_ID, veterinarian_ID, date_of_treatment)
                                VALUES (NULL, '$dog_ID', '$ownername', $customer_ID, $veterinarian_ID, $date_of_treatment)");
    }

    function get_medical_record()
    {
        $sql = "SELECT * FROM tblmedicalrecord";
        return $this->query($sql);
    }

    function delete_medical_record($id)
    {
        $sql = "DELETE FROM tblmedicalrecord WHERE id = $id";
        $this->query($sql);
    }

    function update_medical_record($id, $dog_ID, $ownername, $customer_ID, $veterinarian_ID, $date_of_treatment)
    {
        $sql = "UPDATE tblmedicalrecord SET dog_ID = '$dog_ID', ownername = '$ownername', customer_ID = $customer_ID, veterinarian_ID = $veterinarian_ID, date_of_treatment = $date_of_treatment WHERE id = $id";
        return $this->query($sql);
    }

    function get_medical_record_id($id)
    {
        $sql = "SELECT * FROM tblmedicalrecord WHERE id = $id";
        $rs = $this->query($sql);
        $row = $rs->fetch_row();
        return array(
            "dog_ID" => $row[1],
            "ownername" => $row[2],
            "customer_ID" => $row[3],
            "veterinarian_ID" => $row[4],
            "date_of_treatment" => $row[5],
        );
    }
    function login($username, $password)
    {
        $sql = "SELECT * FROM tbluseraccount WHERE username = \"$username\" and password = \"$password\"";
        $rs = $this->query($sql);
        if ($rs->num_rows > 0) {
            while ($row = $rs->fetch_assoc()) {
                return $row["username"];
            }
        }
        return false;
    }

    function register($username, $password, $firstname, $lastname)
    {
        $sql = "INSERT INTO tbluseraccount (username, password, firstname, lastname) VALUES (\"$username\", \"$password\", \"$firstname\", \"$lastname\")";
        return $this->query($sql);
    }

    function update_user($firstname, $lastname, $username, $password)
    {
        $sql = "UPDATE tbluseraccount SET firstname = \"$firstname\", lastname = \"$lastname\", password = \"$password\" WHERE username = \"$username\"";
        return $this->query($sql);
    }

    function get_user($username)
    {
        $sql = "SELECT firstname, lastname FROM tbluseraccount WHERE username = \"$username\"";
        $rs = $this->query($sql);
        $row = $rs->fetch_row();
        return ["firstname" => $row[0], "lastname" => $row[1]];
    }
}