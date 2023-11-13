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
        <?php include_once 'include/head.php'; ?>
        <link rel="shortcut icon" href="./dist/img/logo.jpg">
        <link rel="icon" href="./dist/img/logo.jpg" type="image/x-icon">
        <!-- Additional styles for courses page -->
        <style>
            .course-list {
                list-style-type: none;
                margin: 0;
                padding: 0;
            }

            .course-list li {
                margin-bottom: 10px;
            }

            .course-list li a {
                color: #007bff;
                text-decoration: none;
                transition: color 0.3s;
            }

            .course-list li a:hover {
                color: #0056b3;
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
                                <h1 class="m-0">Training Courses Catalog</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="./index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active"><?= $menu ?></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="card">
                        
                        <div class="card-body">
                            <div class="container-fluid p-2">
							<table>
                                <div class="category">
                                    <h2>ARMY Courses</h2>
                                    <ul class="course-list">
                                        <li><a href="./stureg.php">Soldier General Duty (GD) Coaching</a></li>
                                        <li><a href="./stureg.php">Technical Entry Scheme (TES) Preparation</a></li>
										<li><a href="./stureg.php">Combined Defense Services (CDS) Exam Coaching</a></li>
										<li><a href="./stureg.php">Territorial Army (TA) Exam Preparation</a></li>
										<li><a href="./stureg.php">Army Clerk and Store Keeper Technical (SKT) Exam Prep</a></li>
										<li><a href="./stureg.php">Army Havildar Education Exam Coaching</a></li>
                                        <!-- -->
                                    </ul>
                                </div>
                                <div class="category">
                                    <h2>NAVY Courses</h2>
                                    <ul class="course-list">
                                        <li><a href="./stureg.php">Naval Academy Examination (NDA & NA) Coaching</a></li>
										<li><a href="./stureg.php">Sailor Entry Exam Preparation (Artificer Apprentice, SSR, MR</a></li>
										<li><a href="./stureg.php">Direct Entry Petty Officer Exam Coaching</a></li>
										<li><a href="./stureg.php">Indian Navy Tradesman Mate Exam Prep</a></li>
										<li><a href="./stureg.php">Navy Dockyard Apprentices Exam Coaching</a></li>
										<li><a href="./stureg.php">Naval Armament Inspection Entry Scheme Coaching</a></li>
										
                                        
                                        <!-- -->
                                    </ul>
									<div class="category">
                                    <h2>AIRFORCE Courses</h2>
                                    <ul class="course-list">
                                        <li><a href="./stureg.php">Air force Senior Secondary Recruit (SSR) Coaching</a></li>
										<li><a href="./stureg.php">Air Force Group X (Technical) Exam Preparational</li>
										<li><a href="./stureg.php">Air Force Group Y (Non-Technical) Exam Coaching</a></li>
										<li><a href="./stureg.php">Air Force Airmen Selection Exam Prep</a></li>
										<li><a href="./stureg.php">Air Force Commissioned Officer Entry Coaching</a></li>
										<li><a href="./stureg.php">Air Force Aeronautical Engineering Exam Coaching</a></li>
                                        <!--  -->
                                    </ul>
									<table>
                                </div>
								
                            </div>
                        </div>
                    </div>
					
                </section>
				<div class="card">
				<button  type="submit" class="btn btn-primary" id="redirectButton"><strong>Go to Main Page</strong></button>

                    <script>
                                 document.getElementById("redirectButton").addEventListener("click", function() {
                                                             window.location.href = "./index.php";
                                                                                                       });
                    </script>

                                
								
								</div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <?php include_once './include/footer.php'; ?>
            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <?php include_once './include/scripts.php'; ?>
    </body>

    </html>

<?php
}
?>
