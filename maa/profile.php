<?php include('top_header.php')
   ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include('header.php') ?>

        <!-- page content -->
        
          
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                 

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <?php echo $_SESSION['admin'];
                  ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>User Profile</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                   
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                   
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="images/download.jpg" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      
                      <?php  require("connection.php");
                               $a= $_GET['mid'];
                      $qry = "select * from pregnant_table where aadhar_number='$a'";
                      $res = mysqli_query($conn,$qry);
                     $row = mysqli_fetch_assoc($res);
                  echo"<h5><b>NAME:    </b>".$row['mother_name']."</h5>
                       <h5>
                       <b>AADHAR ID :  </b>".$row['aadhar_number']."</h5>";
                     ?>

                      
                      <br />

                      <!-- start skills -->
                      
                      <!-- end of skills -->

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                     
                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Personal Information </a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Contact Information</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Other </a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <!-- start personal information -->
                            <?php  require("connection.php");
                               $a= $_GET['mid'];
                      $qry = "select * from pregnant_table where aadhar_number='$a'";
                      $res = mysqli_query($conn,$qry);
                     $row = mysqli_fetch_assoc($res);
                  echo"<h6><B>MOTHER NAME:</b> ".$row['mother_name']."</h6>
                      <h6><b>HUSBAND NAME:</b> ".$row['father_name']."</h6>
                      <h6><b>RELIGION:</b> ".$row['religion']."</h6>
                      <h6><b>CATEGORY: </b>".$row['category']."</h6>
                      <h6><b>BLOOD GROUP: </b>".$row['blood_group']."</h6>
                         
                      <h6><b>DATE OF BIRTH:</B>".$row['date_of_birth']."</h6>
                      <h6><b>AGE:</b>".$row['age']."</h6>
                      <h6><b>WEIGHT:</b>".$row['weight_in_kg']."</h6>";

                      ?>

                            <!-- end personal information -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                            <!-- start user projects -->
                            <?php  require("connection.php");
                               $a= $_GET['mid'];
                      $qry = "select * from pregnant_table where aadhar_number='$a'";
                      $res = mysqli_query($conn,$qry);
                     $row = mysqli_fetch_assoc($res);
                  echo"<h6><B>STATE:</b> ".$row['state_name']."</h6>
                      <h6><b>DISTRICT:</b> ".$row['district_name']."</h6>
                      <h6><b>AREA:</b> ".$row['area_name']."</h6>
                      <h6><b>CONTACT: </b>".$row['contact_number']."</h6>
                      <h6><b>WHOSE NUMBER: </b>".$row['whose_number']."</h6>";
                         
                  
                      ?>
                            <!-- end user projects -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                          <?php  require("connection.php");
                               $a= $_GET['mid'];
                      $qry = "select * from pregnant_table where aadhar_number='$a'";
                      $res = mysqli_query($conn,$qry);
                     $row = mysqli_fetch_assoc($res);
                  echo"<h6><b>REGISTRATION DATE:<font  color=red> ".$row['registration_date']."</font></b></h6>
                      <h6><b>PRESENT DISEASES:<font  color=red> ".$row['present_diseases']."</font></b></h6>
                      <h6><b>PREVIOUS PREGNANCY COMPLEXITY:<font  color=red> ".    $row['previous_pregnancy_complexity']."</font></b></h6>
                      <h6><b>PREVIOUS PREGNANCY DELIVERY RESULT:<font  color=red> ".$row['previous_pregnancy_delivery_result']."</font></b></h6>
                      <h6><b>BEFORE PREVIOUS PREGNANCY COMPLEXITY:<font  color=red> ".$row['before_previous_pregnancy_complexity']."</font></b></h6>
                      <h6><b>BEFORE PREVIOUS PREGNANCY DELIVERY RESULT: <font  color=red>".$row['before_previous_pregnancy_delivery_result']."</font></b></h6>
                      <h6><b>TOTAL NO OF PREGNANCY:<font  color=red> ".$row['total_no_of_pregnancy']."</font></b></h6>
                      <h6><b>CURRENT PREGNANACY WEEK: <font  color=red>".$row['current_pregnancy_week']."</font></b></h6>
                      <h6><b>EXPECTED DELIVERY DATE: <font  color=red>".$row['expected_delivery_date']."</font></b></h6>
                         
                      <h6><b>VDRL RPR TEST:<font  color=red>".$row['VDRL_RPR_test']."  </font></b></h6>
                      <h6><b>HIV TEST:<font  color=red>".$row['HIV_test']."</font></b></h6>
                      <h6><b>SICkLING TEST :<font  color=red>".$row['sickling_test']."</font></b></h6>";

                      ?>
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
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- morris.js -->
    <script src="vendors/raphael/raphael.min.js"></script>
    <script src="vendors/morris.js/morris.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

  </body>
</html>