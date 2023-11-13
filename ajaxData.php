<?php
//Include database configuration file
 include("./include/conn.php"); 


if(  isset($_POST["domain"]) && !empty($_POST["domain"])){
     $s="SELECT course FROM tblcourse where domain_code='".$_POST["domain"]."' ";
    $rs = $conn->query($s);
     
    //Count total number of rows
    $rowCount = $rs->num_rows;
    
    if($rowCount > 0){
   echo '<option value="">Select  Course</option>';
   while($row = $rs->fetch_assoc()){ 
   echo '<option value="'.$row['course'].'">'.$row['course'].'</option>';
        }
    }else{
       echo '<option value="">Course not available</option>';
    }
	
	$query = $conn->query("SELECT * FROM tbldomain where domain_code='".$_POST["domain"]."' ");
	if($row = $query->fetch_assoc()){
		echo "#".$row['domain'];
	}
}

$conn->close();
?>