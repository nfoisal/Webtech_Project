<?php
if(isset($_POST['btn'])){
    $message=$obj_admin_class->save_employee($_POST);
}



?>






<div class="content-wrapper">
      

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-10">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h1 class="box-title">Add A New Employee</h1>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="" method="post">
                    <h2 style="color: green">
                     <?php
                       if(isset($message)) {
                           echo $message;
                           unset($message);
                       }
                     ?>
                    </h2>
                  <div class="box-body">
                     
                     <div class="form-group">
                      <label for="#">Employee Name</label>
                      <input type="text" class="form-control" name="employee_name" maxlength="100" id="exampleInputtext" placeholder="Enter employee first name">
                    </div>
                      
                   
                    
                  <div class="form-group">
                   <label for="class">Employee position</label>
                   <select name="employee_position" class="form-control">
			<option>-Select position-</option>
			<option value="Director">Director</option>
			<option value="Assistant Director">Assistant Director</option>
			<option value="Senior Excutive">Senior Executive</option>
			<option value="junior Excutive">Junior Executive</option>
			<option value="Excutive">Executive</option>
		      </select>
                   </div>
                      
                      
                 <div class="form-group">
                    <label for="#">Date of Birth</label>
                    <input type="text" name="date_of_birth" maxlength="15"class="form-control" id="exampleInputtext" placeholder="MM/DD/YYYY">
                </div>
                      
                 <div class="form-group">
                     <label for="#">Gender</label><br>
                   <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label><br>
                   <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label><br>
                    </div>
                      
                      
                    <div class="form-group">
                      <label for="#">Present Address</label>
                      <textarea type="text" name="present_address"class="form-control" id="exampleInputtext" placeholder="present address"></textarea>
                    </div>
                      
                     <div class="form-group">
                      <label for="#">Permanent Address</label>
                      <textarea type="text" name="permanent_address"class="form-control" id="exampleInputtext" placeholder="permanent address"></textarea>
                    </div>
                      
                    <div class="form-group">
                      <label for="#">Blood group</label>
                      <input type="text" name="blood_group"class="form-control" id="exampleInputtext" placeholder="blood group">
                    </div>
                      
                      
                      
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email Address</label>
                      <input type="email" name="email"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                      
                      
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password"class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                      
                    <div class="form-group">
                      <label for="exampleInputPassword1">Mobile Number</label>
                      <input type="text" name="mobile" class="form-control" id="exampleInputPassword1" placeholder="Mobile Number">
                    </div>
                      
                      
                      
                    <div class="form-group">
                      <label for="exampleInputFile">Add Picture</label>
                      <input type="file" id="exampleInputFile">
                      
                      
                    </div>
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                      <button type="submit" name="btn" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div><!-- /.box -->

              <!-- Form Element sizes -->
              <!-- /.box -->

            </div><!--/.col (left) -->
           
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div>