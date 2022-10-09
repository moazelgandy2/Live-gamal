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
                                $ti = mysqli_query($conn , "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
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
    <link rel="stylesheet" href="css/all.min.css"/>
    <link rel="stylesheet" href="css/normalize.css"/>
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
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="uploadvid.php">
                        <i class="fa-solid fa-upload"></i>
                        <span>Upload</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a class="active d-flex algin-center fs-14 c-black rad-6 p-10" href="#">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <i class=" pl-10 fa-solid fa-lock" style="padding-left:10px ;"></i>
                        <span>Activating</span>
                        </a>
                    </li> -->
                    <li id="ex">
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="../profile/watch1.php">
                        <i class="fa-solid fa-chalkboard-user fa-fw"></i>
                        
                        <span>Explanations</span>
                        </a>
                    </li>

                    <li id="ad">
                        <a class=" active d-flex algin-center fs-14 c-black rad-6 p-10" href="../admin/dashboard.php">
                        <i class="fa-solid fa-gears"></i>
                        <span>Admin</span>
                        </a>
                    </li>
                    <li id="code">
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="code.php">
                        <i class="fa-solid fa-hashtag"></i>                        
                        <span>Codes</span>
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
            <h1 class="p-relative">Dashoard</h1>
            <div class="wrapper d-grid gap-20">
                <!-- Start Welcome -->
                <div class="welcome bg-white rad-10 txt-c-mobile block-mobile">
                    <div class="intro p-20 d-flex space-between bg-eee ">
                        <div>
                            <h2 class="m-0">
                                Welcome
                            </h2>
                            <p class="c-gray mt-5"><?php
                                if (mysqli_num_rows($query) > 0) {
                                            $row = mysqli_fetch_assoc($query);
                                            $t = mysqli_fetch_assoc($ti);
                                            echo " " . $row['name'] ;
                                            // " <a href='../signup/logout.php'>Logout</a>"
                                        }

                            ?></p>
                        </div>
                        <img src="imgs/welcome.png" alt="">
                    </div>
                    
                    <div class="body txt-c d-flex p-20 mt-20 mb-20 block-mobile">
                        <div style="font-weight:700;"><?php echo $row['name'];?><span class="d-block c-gray fs-14 mt-10">
                            <span class=" d-block c-green fs-14 mt-10">
                                        <?php
                                            $rowww = mysqli_fetch_assoc($queryyy);

                                            if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE typee='Admin'")) > 0) {
                                                $ms='Admin' ;
                                                echo $ms;
                                                
                                                
                                            }
                                            else{
                                                $Color = "gray";
                                                $ms2= "Student";
                                                echo '<div style="Color:'.$Color.'">'.$ms2.'</div>';
                                                echo "<script>
                                                const element5 = document.getElementById('ad');
                                                element5.remove();
                                                </script>"; 
                                            }
                                        
                                        ?>
                                    </span>
                    
                            </span>
                        </div>
                        <div style="padding-left: 20px; font-weight:700;">Registered At<span class="d-block c-gray fs-14 mt-10"><?php echo $t['time']; ?></span></div>

                        <div style="padding-left: 20px; font-weight:700;" >Account Status
                            
                            <span id="not" class=" d-block c-green fs-14 mt-10">
                                    <div id="not">
                                        <?php

                                            if ($t['active'] =="Yes") {
                                                $ms='Actice' ;
                                                echo $ms;
                                                echo "<script>
                                                const element = document.getElementById('lo');
                                                const element2 = document.getElementById('lo2');
                                                const element3 = document.getElementById('lo3');
                                                element.remove();
                                                element2.remove();
                                                element3.remove();
                                                </script>";                      
                                            }
                                            else{
                                                $Color = "red";
                                                $ms2= "Inactive";
                                                echo '<div style="Color:'.$Color.'">'.$ms2.'</div>';

                                                echo "<script>
                                                const element = document.getElementById('ex');
                                                const element2 = document.getElementById('ex2');
                                                const element3 = document.getElementById('ex3');
                                                element.remove();
                                                element2.remove();
                                                element3.remove();
                                                </script>";
                                            }


                                        ?>
                                    </div>
                                </span>
                            
                        </div>
                        
                    </div>
                    <a href="profile.php" class=" btn-shape visit d-block fs-14 bg-blue c-white w-fit " style="padding:4px 10px ; border-radius: 6px;">profile</a>
                </div>
                <!-- End Welcome -->

                <!-- Start latest news -->
                <div class="latest-news p-20 bg-white rad-10 text-c-mobile">
                    <h2 class="mb-20 mt-0">Latest News</h2>
                    <div class="news-row d-flex align-center">
                        <img src="imgs/news-02.png" alt="">
                        <div class="info">
                            <h3>New Lecture</h3>
                            <p class="m-0 fs-14 c-gray">New Lecture will be Here on Friday🎉</p>
                        </div>
                        <div class="btn-shape bg-eee fs-13 label">0 min ago</div>
                                    
                    </div>
                    <div class="news-row d-flex align-center">
                        <img src="imgs/news-02.png" alt="">
                        <div class="info">
                            <h3>New Lecture</h3>
                            <p class="m-0 fs-14 c-gray">New Lecture will be Here on Friday🎉</p>
                        </div>
                        <div class="btn-shape bg-eee fs-13 label">0 min ago</div>
                                    
                    </div>
                </div>
                <!-- End latest news -->
            </div>
        </div>
    </div>
</body>
</html>
