<?php
require 'inc/header.php';
require('../inc/db.php');
// get all the agents
$sql = "SELECT * FROM admin_user WHERE role = 'user'";
$result = $dbc->query($sql);

if ($result->num_rows > 0) {
    $allagents = $result->fetch_all(MYSQLI_ASSOC);
}

?>
<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
    Osun APC Campaign 2020
</div>

<!-- wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <?php require('inc/navbar.php'); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php require('inc/sidebar.php'); ?>
<!-- //Main Sidebar Container -->
  
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <?php require('inc/nav-section.php'); ?>

<!-- Tabable-->
<section class="content mt-4">
    <div class="container-fluid ">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> All Registeration Agent</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                    <th>S/N</th>
                                     <th>Name</th>
                                    <th>Username</th>
                                    <th>Phone</th>
                                    <th>LG</th>
                                    <th>Ward</th>
                                    <th>Polling Unit</th>
                                    <th>Password</th>
                                    <th> Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (count($allagents) > 0) {
                                    $i = 0;
                                    foreach ($allagents as $agent) {
                                        $name = $agent['username'];
                                        $fname = $agent['name'];
                                        $phone = $agent['phone'];
                                        $lg = $agent['lg'];
                                        $ward = $agent['ward'];
                                        $polling = $agent['poll_unit'];
                                        $password = $agent['real_password'];
                                        $date = $agent['reg_date'];
                                        $i++;    
                                        echo "<tr>
                                        <td> $i </td>
                                        <td> $fname </td>
                                    <td> $name </td>
                                   <td>$phone</td>
                                    <td>$lg</td>
                                    <td> $ward</td>
                                   <td>$polling</td>
                                   <td> $password </td>
                                    <td>$date</td> 
                                </tr>";
                                    }
                                     } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                <th>S/N</th>
                                     <th>Name</th>
                                    <th>Username</th>
                                    <th>Phone</th>
                                    <th>LG</th>
                                    <th>Ward</th>
                                    <th>Polling Unit</th>
                                    <th>Password</th>
                                    <th> Date</th>
                                  </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.section -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<?php
require 'inc/footer.php';
?>
