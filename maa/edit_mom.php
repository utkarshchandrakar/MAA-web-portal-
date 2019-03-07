<?php include('top_header.php')
   ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php include('header.php') ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>EDIT MOM</h3>
              </div>

              <div class="title_right">
               
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                 
                  <div class="x_content">
                 <?PHP
                  require("connection.php");
                   $a= $_GET['mid'];
                               
                   $qry = "select * from pregnant_table where aadhar_number='$a'";
                   $res = mysqli_query($conn,$qry);
                  $row = mysqli_fetch_assoc($res);
                 ?>
                    <form class="form-horizontal form-label-left input_mask" action='update.php' method='POST'>
                      
                      <div class="col-md-12   form-group has-feedback">
                          <label>AADHAR NUMBER</label>
                        <input type="text" name="adhar" class="form-control has-feedback-left"  id="inputSuccess1" value = "<?php echo $a ?>" readonly>
                      
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>
                 
                      
                      
                      <div class="col-md-12  form-group has-feedback">
                          <label>MOTHER'S NAME</label>
                        <input type="text" class="form-control has-feedback-left" name = "mom_name" id="inputSuccess2" value="<?php echo $row['mother_name'] ?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>
                     
                      <div class="col-md-12  form-group has-feedback">
                          <label>FATHER'S NAME</label>
                        <input type="text" class="form-control has-feedback-left" name = "dad_name" id="inputSuccess3" value="<?php echo $row['father_name'] ?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12  form-group has-feedback">
                          <label>AREA</label>
                        <input type="text" class="form-control has-feedback-left" name="area" id="inputSuccess4" value="<?php echo $row['area_name'] ?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>DISTRICT NAME</label>
                        <input type="text" class="form-control has-feedback-left" name="district" id="inputSuccess5" value="<?php echo $row['district_name'] ?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>STATE NAME</label>
                        <input type="text" class="form-control has-feedback-left"name="state" id="inputSuccess6" value="<?php echo $row['state_name'] ?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>REGISTRATION DATE</label>
                        <input type="text" class="form-control has-feedback-left" name="re_date" id="inputSuccess7" value="<?php echo $row['registration_date'] ?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>CONTACT NUMBER</label>
                        <input type="text" class="form-control has-feedback-left" name="contact" id="inputSuccess8" value="<?php echo $row['contact_number'] ?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>WHOSE NUMBER</label>
                        <input type="text" class="form-control has-feedback-left" name="owner" id="inputSuccess9" value="<?php echo $row['whose_number'] ?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>RELIGION</label>
                        <input type="text" class="form-control has-feedback-left" name="rel" id="inputSuccess10" value="<?php echo $row['religion'] ?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>CATEGORY</label>
                        <input type="text" class="form-control has-feedback-left" name="cat" id="inputSuccess11" value="<?php echo $row['category'] ?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>FAMILY INCOME</label>
                        <input type="text" class="form-control has-feedback-left" name="income" id="inputSuccess12" value="<?php echo $row['family_income'] ?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>DATE OF BIRTH</label>
                        <input type="text" class="form-control has-feedback-left" name="dob" id="inputSuccess13" value="<?php echo $row['date_of_birth'] ?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>LAST PERIOD DATE</label>
                        <input type="text" class="form-control has-feedback-left" name="lmp" id="inputSuccess14" value="<?php echo $row['last_period_date'] ?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>CURRENT PREGNANCY WEEK</label>
                        <input type="text" class="form-control has-feedback-left" name="cpw" id="inputSuccess15" value="<?php echo $row['current_pregnancy_week'] ?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>WEIGHT(KG)</label>
                        <input type="text" class="form-control has-feedback-left" name="weight" id="inputSuccess16" value="<?php echo $row['weight_in_kg'] ?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>EXPECTED DELIVERY DATE</label>
                        <input type="text" class="form-control has-feedback-left" name="edd" id="inputSuccess17" value="<?php echo $row['expected_delivery_date'] ?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>BLOOD group</label>
                        <input type="text" class="form-control has-feedback-left" name="bg" id="inputSuccess18" value="<?php echo $row['blood_group'] ?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>PRESENT DISEASES</label>
                        <input type="text" class="form-control has-feedback-left" name="pd" id="inputSuccess19" value="<?php echo $row['present_diseases'] ?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>TOTAL NUMBER OF PREGNANCY</label>
                        <input type="text" class="form-control has-feedback-left" name="total_preg" id="inputSuccess20" value="<?php echo $row['total_no_of_pregnancy'] ?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                         <label>PREVIOUS PREGNANCY COMPLEXITY</label>
                        <input type="text" class="form-control has-feedback-left" name="ppc" id="inputSuccess21" value="<?php echo $row['previous_pregnancy_complexity'] ?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      
                      <div class="col-md-12 form-group has-feedback">
                          <label>PREVIOUS PREGNANCY DELIVERY RESULT </label>
                        <input type="text" class="form-control has-feedback-left" name="ppdr" id="inputSuccess22" value="<?php echo $row['previous_pregnancy_delivery_result'] ?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>BEFORE PREVIOUS PREGNANCY COMPLEXITY</label>
                        <input type="text" class="form-control has-feedback-left" name="bppc" id="inputSuccess23" value="<?php echo $row['before_previous_pregnancy_complexity']?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>BEFORE PREVIOUS PREGNANCY DELIVERY RESULT</label>
                        <input type="text" class="form-control has-feedback-left" name="bppdr" id="inputSuccess23" value="<?php echo $row['before_previous_pregnancy_delivery_result']?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>HOSPITAL CODE</label>
                        <input type="text" class="form-control has-feedback-left" name="hos_code" id="inputSuccess24" value="<?php echo $row['preferred_hospital_code']?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>HOSPITAL NAME</label>
                        <input type="text" class="form-control has-feedback-left" name="hos_name" id="inputSuccess24" value="<?php echo $row['hospital_name']?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>HOSPITAL ADDRESS</label>
                        <input type="text" class="form-control has-feedback-left" name="hos_add" id="inputSuccess25" value="<?php echo $row['hospital_address']?>">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      
                      <div class="col-md-12 form-group has-feedback">
                          <label>SICKLING TEST</label>
                          <select name = "sick" class="form-control has-feedback-left" name="sick" id="inputSuccess28">
                          <option value="<?php echo $row['sickling_test']?>"><?php echo $row['sickling_test']?></option>
                             <option value = "0">-ve</option>
                             <option value = "1">+ve</option>
                             </select>
                       <!-- <input type="text" class="form-control has-feedback-left" id="inputSuccess28" placeholder="SICKLING TEST">-->
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      
                      <div class="col-md-12 form-group has-feedback">
                          <label>VDRL RPR TEST</label>
                          <select name = "VDRL_RPR_test" class="form-control has-feedback-left" id="inputSuccess28">
                          <option value="<?php echo $row['VDRL_RPR_test']?>"><?php echo $row['VDRL_RPR_test']?></option>
                             <option value = "0">-ve</option>
                             <option value = "1">+ve</option>
                             </select>
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      
                      <div class="col-md-12 form-group has-feedback">
                          <label>HIV TEST</label>
                          <select name = "hiv" class="form-control has-feedback-left" id="inputSuccess27">
                          <option value="<?php echo $row['HIV_test']?>"><?php echo $row['HIV_test']?></option>
                             <option value = "0">-ve</option>
                             <option value = "1">+ve</option>
                             </select>
                        <!--<input type="text" class="form-control has-feedback-left" id="inputSuccess27" placeholder="HIV TEST">-->
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      
                      

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-primary">Cancel</button>
						   <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
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