<?php
//if(isset($_GET['unpublished']))
//{
//    $obj_admin_class->unpublished_category($_GET['category_id']);
//}
//if(isset($_GET['published']))
//{
//   $obj_admin_class->published_category($_GET['category_id']);
//}
$result=$obj_admin_class->select_all_employee();

?>



<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="../adimin_employee/dashboard.php">Home</a> 
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#">Tables</a></li>
</ul>

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>employee name</th>
                        <th>Position</th>
                        <th>Gender</th>
                        <th>Present Address</th>
                        <th>Blood group</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        
                    </tr>
                </thead>   
                <tbody>
                    <?php
                    while($row=  mysql_fetch_assoc($result))
                    {
                    ?>
                    <tr>
                        <td><?php echo $row['employee_id']?></td>
                        
                        <td class="center"><?php echo $row['employee_name']?></td>
                        
                        <td class="center"><?php echo $row['employee_position']?></td>
                        
                        <td class="center"><?php echo $row['gender']?></td>
                        
                        <td class="center"><?php echo $row['present_address']?></td>
                        
                        <td class="center"><?php echo $row['blood_group']?></td>
                        
                        <td class="center"><?php echo $row['email']?></td>
                        
                        <td class="center"><?php echo $row['mobile']?></td>
                        
                      
                  
                    </tr>
                    <?php } ?>
                </tbody>
            </table>            
        </div>
    </div><!--/span-->
</div><!--/row-->