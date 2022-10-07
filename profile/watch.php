<?php
    include ("connect.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    
    $sql = "SELECT video FROM videos WHERE id='$id'";
    $sqll = "SELECT video_name FROM videos WHERE id='$id'";
    $res = mysqli_query($conn, $sql);
    $ress = mysqli_query($conn, $sqll);
    $row = mysqli_fetch_assoc($res);
    $roww = mysqli_fetch_assoc($ress);
    $name = $roww['video_name'];
    $dis = $row['video'];
    // echo "<h1> You Are Watching:".$name." </h1>";

?>


<?php


}
?>

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
    <link rel="stylesheet" href="../profile/css/framework.css"/>
    <link rel="stylesheet" href="../admin/css/master.css"/>
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
            <h3 class="p-relative txt-c mt-0">Fourh Dimention</h3>

            <div class="container">
                <ul>
                <li>
                        <a class="active d-flex algin-center fs-14 c-black rad-6 p-10" href="../profile/dashboard.php">
                        <i class="fa-solid fa-chart-bar fa-fw"></i>
                        
                        <span class="hide-mobile">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="active d-flex algin-center fs-14 c-black rad-6 p-10" href="../profile/profile.php">
                        <i class="fa-solid fa-user fa-fw"></i>                        
                        <span>Profile</span>
                        </a>
                    </li>

                    <li id="ex">
                        <a class="active d-flex algin-center fs-14 c-black rad-6 p-10" href="../profile/watch1.php">
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
                        <a class="active d-flex algin-center fs-14 c-black rad-6 p-10" href="../profile/support.php">
                        <i class="fa-solid fa-headset fa-fw"></i>
                        
                        <span>Help</span>
                        </a>
                    </li>
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
            <h1 class="p-relative">Watching <?php echo"$name";?></h1>
            <div class="wrapper d-grid gap-20">

                <!-- Draft -->
                <div class="quick-draft p-20 bg-white rad-10">
                    <div class="watch" style="position: relative; ">
                      <video class="p-10" controls controlsList="nodownload">
                            <source src="<?php echo $dis;?>" type="video/mp4">
                        </video>
                    </div>
                    

                </div>
                <!-- End Draft -->
            </div>
        </div>
    </div>
</body>
</html>