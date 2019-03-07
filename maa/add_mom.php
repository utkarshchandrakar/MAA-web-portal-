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
                <h3>Add MOM</h3>
              </div>

              <div class="title_right">
               
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                 
                  <div class="x_content">
                    <form class="form-horizontal form-label-left input_mask" action='add.php' method='POST'>

                      <div class="col-md-12   form-group has-feedback">
                          <label>AADHAR NUMBER</label>
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess1" name="adhar" placeholder="AADHAR NUMBER">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      
                      <div class="col-md-12  form-group has-feedback">
                          <label>MOTHER'S NAME</label>
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess2" name="mom_name" placeholder="MOTHER'S NAME">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>
                     
                      <div class="col-md-12  form-group has-feedback">
                          <label>FATHER'S NAME</label>
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess3" name = "dad_name" placeholder="FATHER'S NAME">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12  form-group has-feedback">
                          <label>STATE</label>
                          <select name="state">
                          <option value="MP">MP</option>
                          <option value="CG">CG</option>
                          <option value="MAHARASHTRA">MAHARASHTRA</option>
                          <option value="HARYANA">HARYANA</option>
                          </select>
                        
                      </div>

                      <div class="col-md-12  form-group has-feedback">
                          <label>DISTRICT</label>
                          <select name="district">
                          <option value="PUNE">PUNE</option>
                          <option value="BHOPAL">BHOPAL</option>
                          <option value="AMBALA">AMBALA</option>
                          <option value="DURG">DURG</option>
                          </select>
                       
                      </div>

                      <div class="col-md-12  form-group has-feedback">
                          <label>AREA</label>
                          <select name="area">
                          <option value="SHIVAJI NAGAR">SHIVAJI NAGAR</option>
                          <option value="ARERA COLONY">ARERA COLONY</option>
                          <option value="PALIKA VIHAR">PALIKA VIHAR</option>
                          <option value="PADMANABHPUR">PADMANABHPUR</option>
                          </select>
                        
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>REGISTRATION DATE</label>
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess5" name="re_date" placeholder="REGISTRATION DATE">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>CONTACT NUMBER</label>
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess6" name="contact" placeholder="CONTACT NUMBER">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>WHOSE NUMBER</label>
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess7" name="owner" placeholder="WHOSE NUMBER">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>RELIGION</label>
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess8" name="rel" placeholder="RELIGION">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>CATEGORY</label>
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess9" name="cat" placeholder="CATEGORY">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>FAMILY INCOME</label>
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess10" name="income" placeholder="FAMILY INCOME">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>DATE OF BIRTH</label>
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess11" name="dob" placeholder="DATE OF BIRTH">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>LAST PERIOD DATE</label>
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess12"  name = "lmp" placeholder="LAST PERIOD DATE">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>CURRENT PREGNANCY WEEK</label>
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess13" name="cpw" placeholder="CURRENT PREGNANCY WEEK">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>WEIGHT</label>
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess14" name="weight" placeholder="WEIGHT">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>EXPECTED DELIVERY DATE</label>
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess15"  name="edd" placeholder="EXPECTED DELIVERY DATE">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>BLOOD GROUP</label>
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess16" name="bg" placeholder="BLOOD GROUP">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>PRESENT DISEASES</label>
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess17" name="pd" placeholder="PRESENT DISEASES">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>TOTAL NUMBER OF PREGNANCY</label>
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess18" name="total_preg" placeholder="TOTAL NUMBER OF PREGNANCY">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>PREVIOUS PREGNANCY COMPLEXITY</label>
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess19" name="ppc" placeholder="PREVIOUS PREGNANCY COMPLEXITY">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>PREVIOUS PREGNANCY DELIVERY RESULT</label>
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess20" name="ppdr" placeholder="PREVIOUS PREGNANCY DELIVERY RESULT">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>BEFORE PREVIOUS PREGNANCY COMPLEXITY</label>
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess21" name="bppc" placeholder="BEFORE PREVIOUS PREGNANCY COMPLEXITY">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      
                      <div class="col-md-12 form-group has-feedback">
                          <label>BEFORE PREVIOUS PREGNANCY COMPLEXITY RESULT</label>
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess22" name="bppdr" placeholder="BEFORE PREVIOUS PREGNANCY COMPLEXITY RESULT">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>PREFERRED HOSPITAL CODE</label>
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess23" name="hos_code" placeholder="PREFERRED HOSPITAL CODE">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>HOSPITAL NAME</label>
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess24" name="hos_name" placeholder="HOSPITAL NAME">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-12 form-group has-feedback">
                          <label>HOSPITAL ADDRESS</label>
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess25" name="hos_add" placeholder="HOSPITAL ADDRESS">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      
                      
                      <div class="col-md-12 form-group has-feedback">
                          <label>VDRL RPR TEST</label>
                        <input type="text" class="form-control has-feedback-left" id="inputSuccess26" name="VDRL_RPR_test" placeholder="VDRL RPR TEST">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      
                      <div class="col-md-12 form-group has-feedback">
                          <label>HIV TEST</label>
                          <select name = "hiv" class="form-control has-feedback-left"  id="inputSuccess27">
                          <option value = "">select result</option>
                             <option value = "0">-ve</option>
                             <option value = "1">+ve</option>
                        <!--<input type="text" class="form-control has-feedback-left" id="inputSuccess27" placeholder="HIV TEST">-->
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      
                      <div class="col-md-12 form-group has-feedback">
                          <label>SICKLING TEST</label>
                          <select name = "sick" class="form-control has-feedback-left" id="inputSuccess28">
                          <option value = "">select result</option>
                             <option value = "0">-ve</option>
                             <option value = "1">+ve</option>
                       <!-- <input type="text" class="form-control has-feedback-left" id="inputSuccess28" placeholder="SICKLING TEST">-->
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