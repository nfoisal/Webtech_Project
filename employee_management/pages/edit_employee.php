<?php
//echo 'hello';
$employee_id=$_GET['employee_id'];
//echo $employee_id;
$resource_id=$obj_admin_class->select_employee_by_employee_id($employee_id);
$employee_info= mysql_fetch_assoc($resource_id);

if (isset($_POST['btn'])){
   $obj_admin_class->update_employee_by_employee_id($employee_id, $_POST);
}

//echo '<pre>';
//print_r($employee_info);
//exit()
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
                  <h1 class="box-title">Edit The Information Of This Employee</h1>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form name="edit_employee" role="form" action="" method="post">
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
                      <input type="text" class="form-control" name="employee_name" value="<?php echo $employee_info['employee_name'];?>" maxlength="100" id="exampleInputtext" placeholder="Enter employee first name">
                    </div>
                      
                   
                    
                  <div class="form-group">
                   <label for="class">Employee position</label>
                   <select name="employee_position" value="<?php echo $employee_info['employee_position'];?>" class="form-control">
			<option >-Select position-</option>
			
			<option value="Director">Director</option>
			<option value="Assistant Director">Assistant Director</option>
			<option value="Senior Executive">Senior Executive</option>
			<option value="Junior Executive">Junior Executive</option>
			<option value="Executive">Executive</option>
		      </select>
                   </div>
                      
                      
                 <div class="form-group">
                    <label for="#">Date of Birth</label>
                    <input type="text" name="date_of_birth"value="<?php echo $employee_info['date_of_birth'];?>" maxlength="15"class="form-control" id="exampleInputtext" placeholder="MM/DD/YYYY">
                </div>
                      
                 <div class="form-group">
                     <label for="#">Gender</label><br>
                   <label class="radio-inline"><input type="radio" name="gender" value="<?php echo $employee_info['gender'];?>">Male</label><br>
                   <label class="radio-inline"><input type="radio" name="gender"value="<?php echo $employee_info['gender'];?>">Female</label><br>
                    </div>
                      
                      
                    <div class="form-group">
                      <label for="#">Present Address</label>
                      <textarea type="text" name="present_address"class="form-control" id="exampleInputtext" placeholder="present address"><?php echo $employee_info['present_address'];?></textarea>
                    </div>
                      
                     <div class="form-group">
                      <label for="#">Permanent Address</label>
                      <textarea type="text" name="permanent_address"class="form-control" id="exampleInputtext" placeholder="permanent address"><?php echo $employee_info['permanent_address'];?></textarea>
                    </div>
                      
                    <div class="form-group">
                      <label for="#">Blood group</label>
                      <input type="text" name="blood_group" value="<?php echo $employee_info['blood_group'];?>" class="form-control" id="exampleInputtext" placeholder="blood group">
                    </div>
                      
                      
                      
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email Address</label>
                      <input type="email" name="email"value="<?php echo $employee_info['email'];?>"class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                      
                      
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" value="<?php echo $employee_info['password'];?>"class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                      
                    <div class="form-group">
                      <label for="exampleInputPassword1">Mobile Number</label>
                      <input type="text" name="mobile" value="<?php echo $employee_info['mobile'];?>" class="form-control" id="exampleInputPassword1" placeholder="Mobile Number">
                    </div>
                      
                      
                      
                    <div class="form-group">
                      <label for="exampleInputFile">Add Picture</label>
                      <input type="file" id="exampleInputFile">
                      
                      
                    </div>
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                      <button type="submit" name="btn" class="btn btn-primary">Update information</button>
                  </div>
                </form>
              </div><!-- /.box -->

              <!-- Form Element sizes -->
              <!-- /.box -->

            </div><!--/.col (left) -->
           
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div>