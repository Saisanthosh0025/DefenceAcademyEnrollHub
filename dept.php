<?php
include("./include/conn.php");
session_start();
 
$errormsg = '';
$action = "add";

$domain_code='';
$staffname='';
$email='';
$tea_mod='';
$salary='';
 
if(isset($_POST['save']))
{

$domain_code= mysqli_real_escape_string($conn,$_POST['domain_code']);
$staffname= mysqli_real_escape_string($conn,$_POST['staffname']);
$email= mysqli_real_escape_string($conn,$_POST['email']);
$tea_mod= mysqli_real_escape_string($conn,$_POST['tea_mod']);
$salary= mysqli_real_escape_string($conn,$_POST['salary']);
   

 if($_POST['action']=="add")
 {
 
  $sql = $conn->query("INSERT INTO tblstaff   VALUES ('$domain_code','$staffname', '$email', '$tea_mod','$salary'  )") ;
    
    echo '<script type="text/javascript">window.location="dept.php?act=1";</script>';
 
 }else
  if($_POST['action']=="update")
 {
 $domain_code = mysqli_real_escape_string($conn,$_POST['domain_code']);	
   $sql = $conn->query("UPDATE  tblstaff  SET  staffname  = '$staffname', email  = '$email',  tea_mod   = '$tea_mod' , salary ='$salary ' ,domain_code  = '$domain_code'  WHERE  domain_code  = '$domain_code'");
   echo '<script type="text/javascript">window.location="dept.php?act=2";</script>';
 }



}




if(isset($_GET['action']) && $_GET['action']=="delete"){

$conn->query("delete from tblstaff    WHERE domain_code='".$_GET['domain_code']."'");
header("location: dept.php?act=3");

}


$action = "add";
if(isset($_GET['action']) && $_GET['action']=="edit" ){
$domain_code = isset($_GET['domain_code'])?mysqli_real_escape_string($conn,$_GET['domain_code']):'';

$sqlEdit = $conn->query("SELECT * FROM tblstaff WHERE domain_code='".$domain_code."'");
if($sqlEdit->num_rows)
{
$rowsEdit = $sqlEdit->fetch_assoc();
extract($rowsEdit);
$action = "update";
}else
{
$_GET['action']="";
}

}


if(isset($_REQUEST['act']) && @$_REQUEST['act']=="1")
{
$errormsg = "<div class='alert alert-success'><strong>Success!</strong> Staff Added successfully</div>";
}else if(isset($_REQUEST['act']) && @$_REQUEST['act']=="2")
{
$errormsg = "<div class='alert alert-success'><strong>Success!</strong> Staff Edited successfully</div>";
}
else if(isset($_REQUEST['act']) && @$_REQUEST['act']=="3")
{
$errormsg = "<div class='alert alert-success'><strong>Success!</strong> Staff Deleted successfully</div>";
}

?>

 


    
 
 <!DOCTYPE html>
    <html lang="en">

    <head>
        <?php
        include_once 'include/head.php';
        ?>
        <link rel="shortcut icon" href="./dist/img/logo.jpg">
        <link rel="icon" href="./dist/img/logo.jpg" type="image/x-icon">
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
              
 <?php
            include_once 'include/navbar.php';
            include_once 'include/sidebar.php';
            ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                  <section class="content">
                    <div class="col-md-12">
                        <h1 class="page-head-line">CRUD on Staff  
						<?php
						echo (isset($_GET['action']) && @$_GET['action']=="add" || @$_GET['action']=="edit")?
						' <a href="dept.php" class="btn btn-primary btn-sm pull-right">Back <i class="glyphicon glyphicon-arrow-right"></i></a>':'<a href="dept.php?action=add" class="btn btn-primary btn-sm pull-right"><i class="glyphicon glyphicon-plus"></i> Add </a>';
						?>
						</h1>
                     
<?php

echo $errormsg;
?>
                    </div>
 
				
				
				
        <?php 
		 if(isset($_GET['action']) && @$_GET['action']=="add" || @$_GET['action']=="edit")
		 {
		?>
		
			 
                <div class="row">
				   <div class="col-md-8 offset-md-2">
                    
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           <?php echo ($action=="add")? "Add Staff": "Edit Department"; ?>
                        </div>
						<form action="dept.php" method="post" id="signupForm1" class="form-horizontal">
                        <div class="panel-body">
						
						
						
						
						<div class="form-group">
								<label class="col-sm-2 control-label" for="Old">Domain Code</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="domain_code" name="domain_code" value="<?php echo $domain_code;?>"  />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="Password"> Staff Name </label>
								<div class="col-sm-10">
	                        <textarea class="form-control" id="staffname" name="staffname"><?php echo $staffname ;?></textarea >
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="Password"> Email </label>
								<div class="col-sm-10">
	                        <textarea class="form-control" id="email" name="email"><?php echo $email ;?></textarea >
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="Old">Teaching Exam Module</label>
								<div class="col-sm-10">
								<input type="text" class="form-control" id="tea_mod" name="tea_mod" value="<?php echo $tea_mod;?>"  /> 
							</div>
								
								
							</div>
							
							
							
							<div class="form-group">
								<label class="col-sm-2 control-label" for="Password"> Salary </label>
								<div class="col-sm-10">
	                        <input type="text" class="form-control" id="salary" name="salary" value="<?php echo $salary;?>"  />
								</div>
							</div>
							
							 
						
						<div class="form-group">
								<div class="col-sm-8 col-sm-offset-2">
								<input type="hidden" name="id" value="<?php echo $domain_code;?>">
								<input type="hidden" name="action" value="<?php echo $action;?>">
								
									<button type="submit" name="save" class="btn btn-primary">Save </button>
								</div>
							</div>
                         
                           
                           
                         
                           
                         </div>
							</form>
							
                        </div>
                            </div>
            
			  </div>
              
               

			   
			   
		 


			   
		<?php
		}else{
		?>
		
		 
		 
		 
		<div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Lecturer Dashboard 
                        </div>
                        <div class="panel-body">
                             <div class="table-sorting table-responsive">

                                <table class="table table-striped table-bordered table-hover" id="tSortable22">
                                    <thead>
                                        <tr>
                                            <th>SNo</th>
                                            <th>Domain Code</th>
											<th>Staff Name</th>
											<th>Email</th>
                                            <th>Teaching Exam Module</th>
											<th>Salary</th>
											
											
                                            
											 
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$sql = "select * from tblstaff ";
									$q = $conn->query($sql);
									$i=1;
				while($r = $q->fetch_assoc())
									{
									echo '<tr>
                                            <td>'.$i.'</td>
                                            <td>'.$r['domain_code'].'</td>
                                            <td>'.$r['staffname'].'</td>
											<td>'.$r['email'].'</td>
											<td>'.$r['tea_mod'].'</td>
											<td>'.$r['salary'].'</td>
                                            
											  
											<td>
											<a href="dept.php?action=edit&domain_code='.$r['domain_code'].'" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
											
											<a onclick="return confirm(\'Are you sure you want to delete this record\');" href="dept.php?action=delete&domain_code='.$r['domain_code'].'" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></a> </td>
                                        </tr>';
										$i++;
									}
									?>
									
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     
	 
		
		<?php
		}
		?>
				
			</section>	
            
            </div>
            
<?php include_once './include/footer.php'; ?>
        

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
     </div>
    <!-- /. WRAPPER  -->   
        <!-- ./wrapper -->

        <!-- jQuery -->
<?php include_once './include/scripts.php'; ?>
    </body>

    </html>

 