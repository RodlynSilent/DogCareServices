<?php
require_once 'includes/header.php';
require_once 'db_helper.php';

$db = new DBHelper(DBHelper::getConnection());

?>

<div class="wrapper">
  <?php include 'includes/sidebar.php' ?>
  <div class="main-panel">

    <?php if (isset($_SESSION["message"])) : ?>
      <div class="alert alert-success">
        <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
          <i class="tim-icons icon-simple-remove"></i>
        </button>
        <b><?= $_SESSION["message"]; ?></b>
      </div>
      <?php unset($_SESSION["message"]); ?>
    <?php endif; ?>
    <div class="content">
      <div class="row">



        <div class="col-lg-6 col-md-12">
          <div class="card ">
            <div class="card-header">
              <h4 class="card-title">Medical Records Information</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table tablesorter " id="">
                  <thead class=" text-primary">
                    <tr>
                      <th>
                        Dog ID
                      </th>
                      <th>
                        Ownername
                      </th>
                      <th>
                        Customer ID
                      </th>
                      <th class="text-center">
                        Veterinarian ID
                      </th>
                      <th class="text-center">
                        Date of Treatment
                      </th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($db->get_medical_record() as $medicalrecord) : ?>
                      <tr>
                        <td>
                          <?= $medicalrecord['dog_ID'] ?>
                        </td>
                        <td>
                          <?= $medicalrecord['ownername'] ?>
                        </td>
                        <td>
                          <?= $medicalrecord['customer_ID'] ?>
                        </td>
                        <td class="text-center">
                          <?= $medicalrecord['veterinarian_ID'] ?>
                        </td>
                        <td>
                          <?= $medicalrecord['date_of_treatment'] ?>
                        </td>
                        <td>
                          <a href="update_medicalrecord.php?id=<?= $medicalrecord['id'] ?>"><i class="nc-icon nc-settings"></i></a>
                          <a href="delete.php?medical_record_id=<?= $medicalrecord['id'] ?>" onclick="return confirm('Are you sure you want to delete this medical record?')"><i class="nc-icon nc-simple-remove"></i></a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php require_once 'includes/footer.php' ?>