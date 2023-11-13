<?php
session_start();

if (isset($_GET['menu'])) {
    $menu = $_GET['menu'];
} else {
    $menu = 'Dashboard';
}

if (empty($_SESSION)) {
    include_once './login.php';
    include_once './include/login.php';
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include_once 'include/head.php';
    ?>
    <link rel="shortcut icon" href="./dist/img/logo.jpg">
    <link rel="icon" href="./dist/img/logo.jpg" type="image/x-icon">
    <style>
        /* Add your custom styles here */
        body {
            background-color: #f0f0f0;
        }
        
        .card-header {
            background-color: #333;
            color: #fff;
        }
        
        .small-box {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-bottom: 15px;
        }
        
        .small-box-inner {
            text-align: center;
        }
        
        .small-box-icon {
            font-size: 36px;
            color: #333;
        }
        
        .small-box-title {
            font-size: 18px;
            color: #333;
            margin-top: 10px;
        }
        
        .small-box-footer {
            color: #333;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }
    </style>
	<style>
        /* Add any additional CSS styles here */
        .image-container {
            display: flex;
            justify-content: space-around;
            padding: 20px;
        }
        .image {
            width: 30%; /* Adjust the width as needed */
            border: 2px solid #000;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <?php
    include_once 'include/navbar.php';
    include_once 'include/sidebar.php';
    ?>
	        
               <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
            <div class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
               <div class="col-sm-6">
               <h1 class="m-0">Dashboard</h1>
                </div>
               <!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active"><?= $menu ?></li>
                                </ol>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="card">
					
                        <div class="card-header">Admin Dashboard</div>

                        <div class="card-body">
                            <div class="container-fluid p-2">

                                <!-- Small boxes (Stat box) -->
                                <div class="row">
                                    <div class="col-lg-3 col-6">
                                        <!-- small box -->

                                        <!--card-->

                                        <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3>150</h3>

                                                <p>Candidates registration</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-bag"></i>
                                            </div>
                                            <a href="http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=defence&table=tblstureg" class="small-box-footer">Check candidates <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-3 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-success">
                                            <div class="inner">
                                                <h3>53<sup style="font-size: 20px">%</sup></h3>

                                                <p>Bounce Rate</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-stats-bars"></i>
                                            </div>
                                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-3 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-warning">
                                            <div class="inner">
                                                <h3>180</h3>

                                                <p>User Registrations</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-person-add"></i>
                                            </div>
                                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-3 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-danger">
                                            <div class="inner">
                                                <h3>65</h3>

                                                <p>Unique Visitors</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-pie-graph"></i>
                                            </div>
                                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
									
                                    <!-- ./col -->
                                </div>
                                <!-- /.row -->
                            </div>
							
                            <!-- /.card -->
             
                <!-- right col -->
            </div>
			<div class="image-container">
        <img class="image" src="./dist/img/image1.jpg" alt="Image 1"> <!-- Replace 'image1.jpg' with the first image file or URL -->
        <img class="image" src="./dist/img/image2.jpg" alt="Image 2"> <!-- Replace 'image2.jpg' with the second image file or URL -->
        <img class="image" src="./dist/img/image3.jpg" alt="Image 3"> <!-- Replace 'image3.jpg' with the third image file or URL -->
    </div>
            <!-- /.row (main row) -->
        </div>
        <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <?php include_once './include/footer.php'; ?>
</div>
</body>
</html>
<?php
}
?>
