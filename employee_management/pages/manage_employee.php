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
    <li><a href="../adimin_employee/employee_lists.php">Tables</a></li>
</ul>

<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Employees</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <?php
        
        if(isset($_SESSION['message'])){
            echo $_SESSION['message'];
            unset($_SESSION);
        }
        
        
        ?>
        
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>employee name</th>
                        <th>Position</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Actions</th>
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
                        
                        <td class="center"><?php echo $row['email']?></td>
                        
                        <td class="center"><?php echo $row['mobile']?></td>
                        
                      
                  <td class="center">
                            
                            
                            <a class="btn btn-info" href="edit_employee.php?employee_id=<?php echo $row['employee_id']?>">
                                <i class="halflings-icon white edit">EDIT</i>  
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash">DELETE</i> 
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>            
        </div>
    </div><!--/span-->
</div><!--/row-->