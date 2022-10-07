<?php
                                session_start();
                                if (!isset($_SESSION['SESSION_EMAIL'])) {
                                    header("Location: ../signup/index.php");
                                    die();
                                }

                                include 'connect.php';

                                $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
                                // if (mysqli_num_rows($query) > 0) {
                                //     $row = mysqli_fetch_assoc($query);

                                //     echo "Welcome " . $row['name'] . " <a href='../signup/logout.php'>Logout</a>";
                                // }
                                
                                $queryy = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
                                $code = mysqli_query($conn, "SELECT * FROM users WHERE code='{$_SESSION['SESSION_EMAIL']}'");   
?>

<?php
                                            // $rowww = mysqli_fetch_assoc($queryyy);
                                            // $queerryy = mysqli_query($conn, "SELECT * FROM `users` WHERE `email` = '{$_SESSION['SESSION_EMAIL']}' && `typee` = 'Admin'") or die(mysqli_error());
                                            // $countt = mysqli_num_rows($queerryy);
                                            $admin = mysqli_query($conn , "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
                                            $ad = mysqli_fetch_assoc($admin);
                                            if ($ad['typee'] == "Admin") {
                                                // $ms='Admin' ;
                                                // echo $ms;
                                                
                                                
                                            }
                                            else{
                                                // $Color = "gray";
                                                // $ms2= "Student";
                                                // echo '<div style="Color:'.$Color.'">'.$ms2.'</div>';
                                                echo "<script>
                                                const element5 = document.getElementById('ad');
                                                element5.remove();
                                                </script>"; 
                                            }
                                        
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/framework.css"/>
    <link rel="stylesheet" href="../admin/css/master.css"/>
    <link rel="stylesheet" href="../admin/css/all.min.css"/>
    <link rel="stylesheet" href="../admin/css/normalize.css"/>
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
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="../profile/dashboard.php">
                        <i class="fa-solid fa-chart-bar fa-fw"></i>
                        
                        <span class="hide-mobile">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="../profile/profile.php">
                        <i class="fa-solid fa-user fa-fw"></i>                        
                        <span>Profile</span>
                        </a>
                    </li>
                    <li id="ex">
                        <a class=" active d-flex algin-center fs-14 c-black rad-6 p-10" href="../profile/watch1.php">
                        <i class="fa-solid fa-chalkboard-user fa-fw"></i>
                        
                        <span id="myBtn" class="php">Explanations</span>
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
                </ul>
            </div>
		<?php
                                            // $rowww = mysqli_fetch_assoc($queryyy);
                                            // $queerryy = mysqli_query($conn, "SELECT * FROM `users` WHERE `email` = '{$_SESSION['SESSION_EMAIL']}' && `typee` = 'Admin'") or die(mysqli_error());
                                            // $countt = mysqli_num_rows($queerryy);
                                            $admin = mysqli_query($conn , "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
                                            $ad = mysqli_fetch_assoc($admin);
                                            if ($ad['typee'] == "Admin") {
                                                // $ms='Admin' ;
                                                // echo $ms;
                                                
                                                
                                            }
                                            else{
                                                // $Color = "gray";
                                                // $ms2= "Student";
                                                // echo '<div style="Color:'.$Color.'">'.$ms2.'</div>';
                                                echo "<script>
                                                const element5 = document.getElementById('ad');
                                                element5.remove();
                                                </script>"; 
                                            }
                                        
?>
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
            <h1 class="p-relative">Explanations</h1>
            <div class="example-page d-grid m-20 gap-20">
                
                <div class="course bg-white rad-6 p-relative">
                    <?php
			            require 'connect.php';
			
			            $query = mysqli_query($conn, "SELECT * FROM `videos`") or die(mysqli_error());
			            while($fetch = mysqli_fetch_array($query)){
                            $id= $fetch['id'];
		            ?>
                        <img class="cover" src="<?php echo $fetch['video_img']?>" alt="">                        

                    <div class="p-20">
                        <h4 class="m-0"><?php echo $fetch['video_name']?></h4>
                        
                    </div>
                    <div class="view p-15 p-relative between-flex">
                            <a href="watch.php?id=<?php echo  $id;?>"><span class="title bg-blue c-white btn-shape" style="padding: 4px 10px;border-radius: 6px;">Watch</span></a>
                            <!-- echo "<h4><a href='watch.php?id=$id'>" .$name. $img. "</a></h4><br/>"; -->

                    </div>
                    <br />
                     <?php		

                    }
                    ?>
                </div>
            </div>
           
        </div>
    </div>

</body>
</html>
