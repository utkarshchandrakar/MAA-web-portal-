<?php include('top_header.php'); ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      <?php include('header.php') ?>
        <!-- page content-->
        
        <div class = "col_rightclearfix col-md-12" align = 'right'>
               <span align = "left">HIGH RISK FILTERS:</span>
            <form ACTION = 'view_mom.php' method ='POST'>
              
            State 
                <select name='state'> 
                    <option value=''>---select ---</option>
                    <option value = 'MP'>MP</option>
                    <option value = 'CG'>CG</option>
                    <option value = 'MAHARASHTRA'>MAHARASHTRA</option>
                    <option value = 'HARYANA'>HARYANA</option>
                  </select>  
                  WEIGHT 
                <select name='weight_in_kg'> 
                    <option value=''>---select ---</option>
                    <option value = 'less'>LESS THAN 40</option>
                    <option value = 'more'>MORE THAN 40</option>
                    
                  </select>
                  AGE 
                   
                <select name='age'> 
                    <option value=''>---select ---</option>
                    <option value = 'below'>BELOW 18</option>
                    <option value = 'equal'>18-30</option>
                    <option value = 'upper'>30 ABOVE</option>
                  
                  </select>  
                 PREGNANCY NUMBER
                   
                   <select name='total_no_of_pregnancy'> 
                   <option value=''>---SELECT---</option>
                       <option value='first'>FIRST TIME</option>
                       <option value='greater'>GREATER THAN 3</option>
                       
                     </select>  

                     MISCARRIAGE
                   
                   <select name='previous_pregnancy_delivery_result'> 
                   <option value=''>---SELECT---</option>
                       <option value='check'>Child Deaths</option>
                       
                       
                     </select>  
                  
                 <input type="submit" value="SEARCH">
                 <a href='view_mom.php'><input type="submit" value="RESET"></a>
              </form> 
            </div>
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>MOMS</h3>
              </div>

              <div class="title_t">
              
              </div>
            </div>
           
           

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      <!--DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
-->
</p>
                    
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>State</th>
                          <th>AGE</th>
                          <th>Total No of Pregnancies</th>
                          <th>Weight</th>
                          <th>Adhar No</th>
                          <th>Options</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php  
                      $qry = "select * from pregnant_table WHERE 1=1";
                      if(isset($_POST['state']) && !empty($_POST['state'])){
                        $state = $_POST['state']; 
                        $qry .= " AND state_name='$state'";
                      }
                      if(isset($_POST['previous_pregnancy_delivery_result']) && !empty($_POST['previous_pregnancy_delivery_result'])){
                        $previous_pregnancy_delivery_result = $_POST['previous_pregnancy_delivery_result']; 
                        if($previous_pregnancy_delivery_result=='check')
                        $qry .=" AND strcmp(previous_pregnancy_delivery_result,'alive')";
                      }
                       if(isset($_POST['total_no_of_pregnancy']) && !empty($_POST['total_no_of_pregnancy'])){
                        $total_no_of_pregnancy = $_POST['total_no_of_pregnancy'];
                        if($total_no_of_pregnancy == 'first') 
                        $qry .= " AND total_no_of_pregnancy < 1";
                        if($total_no_of_pregnancy == 'greater') 
                        $qry .= " AND total_no_of_pregnancy >3";

                      }
                      if(isset($_POST['weight_in_kg']) && !empty($_POST['weight_in_kg'])){
                        $weight_in_kg = $_POST['weight_in_kg']; 
                        if($weight_in_kg == 'less')
                        $qry .= " AND weight_in_kg < 40";
                        else if($weight_in_kg == 'more')
                        $qry .= " AND weight_in_kg >=40";
                      }


                       if(isset($_POST['age']) &&
                       !empty($_POST['age'])){
                        $age = $_POST['age'];
                       // echo $age;
                        if($age=='below') 
                        $qry .= " and age <= 18";
                        else if($age=='equal')
                        $qry .= " and age > 18 and age <= 30";
                        else if($age=='upper')
                        $qry .= " and age > 30";
                      }
                     // print_r($_POST);
                      $qry .=" order by mother_name ASC";
                    // echo $qry; //die();
                      $res = mysqli_query($conn,$qry);
                      while($row = mysqli_fetch_assoc($res)){
                        $mother = $row['aadhar_number'];  
                        echo"<tr>
                          <td>".$row['mother_name']."</td>
                          <td>".$row['state_name']."</td>
                          <td>".$row['age']."</td>
                          <td>".$row['total_no_of_pregnancy']."</td>
                          <td>".$row['weight_in_kg']."</td>
                          <td>".$row['aadhar_number']."</td>
                          <td width='15%'><a href='profile.php?mid=$mother'>View</a> | <a href='edit_mom.php?mid=$mother'>Edit</a> | <a href='delete.php?mid=$mother'>Delete</a></td>
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