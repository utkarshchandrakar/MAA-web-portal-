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
                    <div class="col-sm-6">
                      <div class="dataTables_length" id="datatable_length">
                        <label>Show </label>
                          <select name="datatable_length" aria-controls="datatable" class="form-control input-sm">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                          </select>
                          <label> entries</label>
                        </div>
                      </div>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Sr.no</th><!--autoincement-->
                          <th>Aadhar Number</th>
                          <th>Parent Type</th>
                          
                          <th>Parent name</th>
                          <th>Delivery Date</th>
                          <th>Weight of mother</th>
                          <th>mother_sisbp</th>
                          <th>mother_diabp</th>
                          <th>Baby's weight</th>
                          <th>Height of Baby</th>
                          <th>Vaccine for baby</th>
                          <th>Options</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php  
                      $qry1 = "select * from parent_table order by parent_name ASC";
                      $res = mysqli_query($conn,$qry1);
                      while($row = mysqli_fetch_assoc($res)){  
                        echo"<tr>
                          <td>".$row['par_sno']."</td>
                          
                          <td>".$row['aadhar_number']."</td>
                          <td>".$row['parent_type']."</td>
                          <td>".$row['parent_name']."</td>
                          <td>".$row['date_of_delivery']."</td>
                          <td>".$row['mother_weight']."</td>
                          <td>".$row['mother_sisbp']."</td>
                          <td>".$row['mother_diabp']."</td>
                          <td>".$row['baby_weight']."</td>
                          <td>".$row['baby_height']."</td>
                          <td>".$row['baby_vaccine']."</td>
                         
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