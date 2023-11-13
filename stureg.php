<!DOCTYPE html>
<html lang="en">
<head>
     <?php
	 session_start();
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
<div class="content-wrapper">
  <section class="content">	
 <div class="col-md-12">  
 <h2>Candidate Enrollment Form</h2>
 <form id="studentForm" method="post"  action="insertstudent.php"  >
 <div class="form-group">
     <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" name="name" required>
       </div>
      <div class="form-group">
      <label for="email">Email:</label>
       <input type="email" class="form-control" id="email" name="email" required>
         </div>
		 <div class="form-group">
        <label for="dob">Date of Birth:</label>
         <input type="date" class="form-control" id="dob" name="dob" required>
        </div>
        <div class="form-group">
        <label for="age">Age:</label>
         <input type="number" class="form-control" id="age" name="age" required>
        </div>
		<div>
		 <label for="gender">State:</label>
        <select id="state" name="state" class="form-control" required>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Telangana">Telangana</option>
			<option value="Karnataka">Karnataka</option>
            <option value="Kerala">Kerala</option>
        </select>
		<div class="form-group">
     <label for="name">Phone Number:</label>
      <input type="number" class="form-control" id="number" name="number" required>
       </div>
		<div class="form-group">
        <label for="ip">12th/Intermediate (%):</label>
         <input type="number" class="form-control" id="ip" name="ip" required>
        </div>
		
		 <div class="form-group">
		<label  for="domain"> Domain </label>
  <?php
	  
   include("./include/conn.php"); 
  $sql = "select * from tbldomain "; 
	$rs = $conn->query ($sql); ?>
	 <select  name='domain' id='domain' class='form-control'> 
	  <option value=''>Select Domain </option> 
	<?php 
	while ($row =  $rs->fetch_assoc()) {  ?>
	<option  value=<?php echo $row['domain_code'];?> > <?php echo $row['domain_code'];?> </option>
     <?php      
	 }
	 ?>
 </select></div> 
 <div id='res' style='color:red;'></div> 
 

<div class="form-group">
<label  for="course">Exam Catogery</label>
 <?php
$sql = "select * from tblcourse   "; 
	$rs = $conn->query ($sql);  ?>
  <select  name='course' id='course' class='form-control'> 
	  <option value=''>Select Exam</option>
<?php 			 
	while ($row =  $rs->fetch_assoc()) {  ?>
	<option   value=<?php echo $row['course'];?> > <?php echo $row['course'];?> </option>
   <?php        }
      ?>                             
 </select> 
	</div>			
		<div>
		 <label for="gender">Gender:</label>
        <select id="gender" name="gender" class="form-control" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
  	 	
     
        </div>
		
		</div>
        </br>
         <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div id="result"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script>
   $(document).ready(function() {
   $("#studenForm").submit(function(e) {
    e.preventDefault();
                
        $.ajax({
            type: "POST",
             url: "insert76.php",
           data: $(this).serialize(),
           success: function(res) {
           $("#result").html(res);
              }
                });
            });
        });
    </script>
 
<script type="text/javascript">
$(document).ready(function(){
 $('#domain').on('change',function(){
        var domain= $(this).val();
         
        if(domain){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'domain='+domain,
              success:function(res){
				  alert(res);
			data= res.split("#");
            $('#course').html(data[0]);
			$('#res').html(data[1]);
             }
            });
	 } 		
	  });					
   });   
 </script> 
        <!-- jQuery -->
<?php include_once './include/scripts.php'; ?>
</body>
</html>
