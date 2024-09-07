<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Admin Dasboard</title>
    </head>

    <body>

        <?php


include("../include/header.php");

include("../include/connection.php");
?>



        <div class="container-fluid">
            <div class="col-md-12">

                <div class="row">

                    <div class="col-md-2" style="margin-left: -30px">


                        <?php
                        
                         include("sidenav.php");
                     ?>


                    </div>


                    <div class="col-md-10">

                        <h4 class="my-2">Admin Dashboard</h4>


                        <div class="col-md-12 my-1">

                            <div class="row">

                                <div class="col-md-3 bg-success mx-2" style=" height: 130px">

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <?php
                                                         $ad = mysqli_query($con, "SELECT * FROM admin");
                                                         $num = mysqli_num_rows($ad);
                                                      ?>

                                                <h5 class="my-2 text-white" style="font-size:30px"><?php echo $num?>
                                                </h5>
                                                <h5>Total</h5>
                                                <h5>Admin</h5>
                                            </div>

                                            <div class="col-md-4">
                                                <a href="admin.php"><i class="fa fa-users-cog fa-3x my-4"
                                                        style="color: white"></i></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 bg-info mx-2" style="height: 130px">

                                    <?php
                                     $doctor = mysqli_query($con, "SELECT * FROM doctors WHERE status='Approved'");
                                     $num2  = mysqli_num_rows($doctor);
                                  ?>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">

                                                <h5 class="my-2 text-white" style="font-size:30px"><?php echo $num2?>
                                                </h5>
                                                <h5>Total</h5>
                                                <h5>Doctors</h5>
                                            </div>

                                            <div class="col-md-4">
                                                <a href="doctor.php"><i class="fa fa-user-md fa-3x my-4"
                                                        style="color: white"></i></a>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-3 bg-warning mx-2" style="height: 130px">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <?php
                                                  $p = mysqli_query($con, "SELECT * FROM patient");
                                                  $pp = mysqli_num_rows($p);
                                              ?>

                                                <h5 class="my-2 text-white" style="font-size:30px"><?php echo $pp?></h5>
                                                <h5>Total</h5>
                                                <h5>Patients</h5>
                                            </div>

                                            <div class="col-md-4">
                                                <a href="patient.php"><i class="fa fa-procedures fa-3x my-4"
                                                        style="color: white"></i></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 bg-danger mx-2 my-2" style="height: 130px">

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">

                                                <?php
                                                $re = mysqli_query($con, "SELECT * FROM report");

                                                $rep = mysqli_num_rows($re);
                                              ?>
                                                <h5 class="my-2 text-white" style="font-size:30px"><?php echo $rep ?>
                                                </h5>
                                                <h5>Total</h5>
                                                <h5>Reports</h5>
                                            </div>

                                            <div class="col-md-4">
                                                <a href="report.php"><i class="fa fa-flag fa-3x my-4"
                                                        style="color: white"></i></a>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-3 bg-warning mx-2 my-2" style="height: 130px">

                                    <?php

                                     $job = mysqli_query($con, "SELECT * FROM doctors WHERE status='Pending'");
                                     $num1 = mysqli_num_rows($job);

                                     ?>

                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">

                                                <h5 class="my-2 text-white" style="font-size:30px"><?php echo $num1?>
                                                </h5>
                                                <h5>Total</h5>
                                                <h5>Job Request</h5>
                                            </div>

                                            <div class="col-md-4">
                                                <a href="job_request.php"><i class="fa fa-book-open fa-3x my-4"
                                                        style="color: white"></i></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3 bg-success mx-2 my-2" style="height: 130px">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-8">

                                                <?php

                                                $in = mysqli_query($con, "SELECT sum(amount_paid) as profit FROM income");
                                                $row = mysqli_fetch_array($in);
                                                $inc = $row['profit'];
                                              ?>
                                                <h5 class="my-2 text-white" style="font-size:30px">
                                                    <?php echo "Rs $inc"; ?></h5>
                                                <h5>Total</h5>
                                                <h5>Income</h5>
                                            </div>

                                            <div class="col-md-4">
                                                <a href="income.php"><i class="fa fa-money-check-alt fa-3x my-4"
                                                        style="color: white"></i></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>


    </body>

</html>







.