<?php include('top_header.php'); ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      <?php include('header.php') ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>MOM's </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      <!--DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
--></p>
                    0
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Sr.no</th><!--autoincement-->
                          <th>Aadhar Number</th>
                          <th>Wife name</th>
                          <th>Wife DOB</th>
                          <th>Husband name</th>
                          <th>Husband DOB</th>
                          <th>Marriage date</th>
                          <th>Last period date</th>
                          <th>Height of wife(in cms)</th>
                          <th>Wife's weight(in kg)</th>
                          <th>Health Concern</th>
                          
                          <th>Options</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php  
                      $qry2 = "select * from planning_table order by 'aadhar number' ";
                      $res = mysqli_query($conn,$qry2);
                      while($row = mysqli_fetch_assoc($res)){  
                        echo"<tr>
                          <td>".$row['plan_sno']."</td>
                          
                          <td>".$row['aadhar_number']."</td>
                          <td>".$row['wife_name']."</td>
                          <td>".$row['wife_dob']."</td>
                          <td>".$row['husband_name']."</td>
                          <td>".$row['husband_dob']."</td>
                          <td>".$row['marriage_date']."</td>
                          <td>".$row['last_period_date']."</td>
                          <td>".$row['wife_height']."</td>
                          <td>".$row['wife_weight']."</td>
                          <td>".$row['health_concern']."</td>                         
                          <td width='15%'><a href='#'>View</a> | <a href='#'>Edit</a> | <a href='#'>Delete</a></td>
                        </tr>";
                      }
                      ?>
                      </tbody>
                    </table>
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

    <?php include('top_footer.php') ?>