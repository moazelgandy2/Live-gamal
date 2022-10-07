<?php
                                session_start();
                
                                if (!isset($_SESSION['SESSION_EMAIL'])) {
                                    header("Location: ../signup/index.php");
                                    die();
                                }

                                include 'connect.php';
                                $tim = date("H:i", strtotime("+0 HOURS"));
                                $date = date("Y-m-d", strtotime("+0 HOURS"));
                                // echo "Error: " . $sqll . "<br>" . $conn->error;
                                mysqli_query($conn,"UPDATE timee SET time = NOW()  WHERE student_name='{$_SESSION['SESSION_EMAIL']}'");
                                $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
                                $queryyy = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
                                $ti = mysqli_query($conn , "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'")


                                // if (mysqli_num_rows($query) > 0) {
                                //     $row = mysqli_fetch_assoc($query);

                                //     echo "Welcome " . $row['name'] . " <a href='../signup/logout.php'>Logout</a>";
                                // }
?>

<?php




                                $queryy = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
                                $code = mysqli_query($conn, "SELECT * FROM users WHERE code='{$_SESSION['SESSION_EMAIL']}'");   
                                
                            

?>  

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/framework.css"/>
    <link rel="stylesheet" href="../profile/css/master.css"/>
    <link rel="stylesheet" href="../profile/css/all.min.css"/>
    <link rel="stylesheet" href="../profile/css/normalize.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="../imgs/logo3.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;5O0&display=swap" rel="stylesheet"/>
    <title>Fourth Dimention</title>
</head>
<body>
    <div class="page d-flex" >
        <div class="sidebar bg-white p-20 p-relative">
            <h3 class="p-relative txt-c mt-0">Admin Dashboard</h3>

            <div class="container">
                <ul>
                <li>
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="../profile/dashboard.php">
                        <i class="fa-solid fa-chart-bar fa-fw"></i>
                        
                        <span class="hide-mobile">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="active d-flex algin-center fs-14 c-black rad-6 p-10" href="uploadvid.php">
                        <i class="fa-solid fa-upload"></i>
                        <span>Upload</span>
                        </a>
                    </li>

                    <li id="ex">
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="watch.php">
                        <i class="fa-solid fa-chalkboard-user fa-fw"></i>
                        
                        <span>Explanations</span>
                        </a>
                    </li>
                    <li id="ad">
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="../admin/dashboard.php">
                        <i class="fa-solid fa-gears"></i>
                        <span>Admin</span>
                        </a>
                    </li>
                    <li>
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="support.php">
                        <i class="fa-solid fa-headset fa-fw"></i>
                        
                        <span>Help</span>
                        </a>
                    </li>

                    <!-- <li id="ad">
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="admin.php">
                        <i class="fa-solid fa-gears"></i>
                        <span>Admin</span>
                        </a>
                    </li> -->
                </ul>

            </div>

        </div>
        <div class="content w-full" style="width: 100%;">
            <!-- Start Head -->
            <div class="head bg-white p-15 between-flex" style="padding: 15px; background-color:white; display:flex; justify-content: space-between; align-items:center;">
                <div class="search p-relative" style="position: relative;">
                    <input class="p-10" type="search" placeholder="Search for lectures?">
                </div>
                <div class="icons d-flex align-center">

                    <span class="notification p-relative">
                    <i class="fa-solid fa-bell fa-lg"></i>
                    </span>
                    <img src="imgs/avatar.png" alt="">
                </div>

            </div>
            <!-- End Head -->
            <h1 class="p-relative">Admin</h1>
            <div class="wrapper d-grid gap-20">
                <!-- Draft -->
                <div class="quick-draft p-20 bg-white rad-10">
                   

	                <?php if (isset($_GET['error'])) {  ?>
		            <p><?=$_GET['error']?></p>
                    <?php } ?>
                    <form action="save_video.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="col-md-2"></div>
                                <div class="col-md-8 p-relative" style="right: -20%;">
                                    <div class="form-group mb-20">
                                        <label>Lecture Name</label>
                                        <input type="text" class="form-control " style="    border: 1px solid #CCC;
    border-radius: 10px;
    margin-left: 5px;
    padding-left: 30px;
    width: 200px;
    transition: width 0.3s;" name="video_name" required="required" placeholder="Enter Lecture name"/>
                                    </div>
                                    <div class="form-group mb-20">
                                        <label>Lecture Video</label>
                                        <input type="file" class="form-control" name="video" min="0" required="required"/>
                                    </div>
                                    <div class="form-group mb-20">
                                        <label>Lecture Image</label>
                                        <input type="file" class="form-control" name="video_img" required="required"/>
                                    </div>
                                </div>
                            </div>
                            <div style="clear:both;"></div>
                            <div class="modal-footer">
                                <button name="save" class="btn btn-primary btn-shape" style="margin-top: 60px; position:relative; right:-40%;"><span class="glyphicon glyphicon-save"></span> Save</button>
                            </div>
                        </div>
                    </form>

                </div>
                <!-- End Draft -->

            </div>
        </div>
    </div>
</body>
</html>