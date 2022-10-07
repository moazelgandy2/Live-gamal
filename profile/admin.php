<?php
                                session_start();
                
                                if (!isset($_SESSION['SESSION_EMAIL'])) {
                                    header("Location: ../signup/index.php");
                                    die();
                                }

                                include '../profile/connect.php';
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


                                $querry = mysqli_query($conn, "SELECT * FROM `users` WHERE `code` = '$_SESSION[SESSION_EMAIL]'") or die(mysqli_error());
                                $fetch = mysqli_fetch_array($querry);

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
            <h3 class="p-relative txt-c mt-0">Fourh Dimention</h3>

            <div class="container">
                <ul>
                <li>
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="dashboard.php">
                        <i class="fa-solid fa-chart-bar fa-fw"></i>
                        
                        <span class="hide-mobile">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="profile.php">
                        <i class="fa-solid fa-user fa-fw"></i>                        
                        <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class="active d-flex algin-center fs-14 c-black rad-6 p-10" href="../code/index.php">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <i class=" pl-10 fa-solid fa-lock" style="padding-left:10px ;"></i>

                        <span>Activating</span>
                        </a>
                    </li>
                    <li id="ex">
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="explain.php">
                        <i class="fa-solid fa-chalkboard-user fa-fw"></i>
                        
                        <span>Explanations</span>
                        </a>
                    </li>
                    <li id="lo">
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="">
                        <i class="fa-solid fa-chalkboard-user fa-fw"></i>
                        <i class=" pl-10 fa-solid fa-lock" style="padding-left:10px ;"></i>
                        <span>Explanations</span>
                        </a>
                    </li>

                    <li id="ex2">
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="lectures.php">
                        <i class="fa-solid fa-book-open fa-fw"></i>                    
                        <span>Lectures</span>
                        </a>
                    <li id="lo2">
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="">
                        <i class="fa-solid fa-book-open fa-fw"></i>      
                        <i class=" pl-10 fa-solid fa-lock" style="padding-left:10px ;"></i>              
                        <span>Lectures</span>
                        </a>
                    </li>
                    <li id="ex3">
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="question.php">
                        <i class="fa-solid fa-question fa-fw"></i>
                        
                        <span>Question</span>
                        </a>
                    </li>
                    <li id="lo3">
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="">
                        <i class="fa-solid fa-question fa-fw"></i>
                        <i class=" pl-10 fa-solid fa-lock" style="padding-left:10px ;"></i>
                        
                        <span>Question</span>
                        </a>
                    </li>
                    <li id="ad">
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="">
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
                    <img src="../profile/imgs/avatar.png" alt="">
                </div>

            </div>
            <!-- End Head -->
            <h1 class="p-relative">Admin DashBoard</h1>
            <div class="wrapper d-grid gap-20">
                <?php
                                            $rowww = mysqli_fetch_assoc($queryyy);

                                            if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE typee=''")) > 0) {
                                                $ms='Admin' ;
                                                // echo $ms;
                                                
                                                
                                            }
                                            else{
                                                $Color = "gray";
                                                // $ms2= "Student";
                                                // echo '<div style="Color:'.$Color.'">'.$ms2.'</div>';
                                                echo "<script>
                                                const element5 = document.getElementById('ad');
                                                element5.remove();
                                                </script>"; 
                                            }

                                            if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE code=''")) > 0) {
                                                $ms='Actice' ;
                                                // echo $ms;
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
                                                // echo '<div style="Color:'.$Color.'">'.$ms2.'</div>';

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

                <div class="latest-news p-20 bg-white rad-10 text-c-mobile">
                    <table id = "table" class = "table table-bordered">
                        <thead class = "alert-info">
                            <tr>
                                <th>Student ID</th>
                                <th>Student Name</th>
                                <th>Time</th>

                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $q_time = $conn->query("SELECT * FROM `users`") or die(mysqli_error());
                            while($f_time = $q_time->fetch_array()){
                                
                        ?>	
                            <tr>
                                <td><?php echo $f_time['name']?></td>
                                <td><?php echo htmlentities($f_time['email'])?></td>
                                <td><?php echo date("h:i a", strtotime($f_time['time']))?></td>
                                <!-- <td><?php echo date("m-d-Y", strtotime($f_time['date']))?></td> -->
                                <!-- <td><button name = "<?php echo $f_time['time_id']?>" class = "btn btn-danger rtime_id" href = "#" data-toggle = "modal" data-target = "#delete"><span class = "glyphicon glyphicon-remove"></span></button></td> -->
                            </tr>
                        <?php
                            }
                        ?>	
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
    

</body>
</html>