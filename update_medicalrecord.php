<?php
require_once 'includes/header.php';
require_once 'db_helper.php';

$db = new DBHelper(DBHelper::getConnection());

$id = $_GET['id'];
$row = $db->get_medical_record_id($id);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $db->update_medical_record($id, $_POST["dog_ID"], $_POST["ownername"], $_POST["customer_ID"], $_POST["veterinarian_ID"], $_POST["date_of_treatment"]);
    header('Location: index.php');
}

?>

<body>
    <form method="POST"><br><br><br><br>
        <div class="column" align="center"><br>
            <div class="col-md-3 px-1">
                <div class="form-group">
                    <label for="dog_ID">Dog ID</label><br>
                    <input type="int" class="form-control" name="dog_ID" value="">
                </div>
            </div>
            <div class="col-md-3 px-1">
                <div class="form-group">
                    <label for="ownername">Owner Name</label>
                    <input type="text" class="form-control" name="ownername" value="">
                </div>
            </div>
            <div class="col-md-3 px-1">
                <div class="form-group">
                    <label for="customer_ID">Customer ID</label>
                    <input type="int" class="form-control" name="customer_ID" value="">
                </div>
            </div>
            <div class="col-md-3 px-1">
                <div class="form-group">
                    <label for="veterinarian_ID">Veterinarian ID</label>
                    <input type="int" class="form-control" name="veterinarian_ID" value="">
                </div>
            </div>
            <div class="col-md-3 px-1">
                <div class="form-group">
                    <label for="date_of_treatment">Date of Treatment</label>
                    <input type="date" class="form-control" name="date_of_treatment" value="">
                </div>
            </div>
            <div class="row">
                <div class="update ml-auto mr-auto">
                    <button type="submit" class="btn btn-info btn-md">Add Medical Record</button>
                </div>
            </div>
        </div>
    </form>

    <?php include 'includes/footer.php'; ?>
</body>

</html>