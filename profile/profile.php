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
                                $query2 = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
                                $query3 = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
                                $query4 = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
                                $query5 = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");
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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="css/css2/framework.css"/>
    <link rel="stylesheet" href="../profile/css/css2/master.css"/>
    <link rel="stylesheet" href="css/all.min.css"/>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="shortcut icon" type="image/x-icon" href="../imgs/logo3.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet" />
  </head>
  <body>
    <div class="page d-flex">
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
                        <a class="active d-flex algin-center fs-14 c-black rad-6 p-10" href="profile.php">
                        <i class="fa-solid fa-user fa-fw"></i>                        
                        <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="active.php">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <!-- <i class=" pl-10 fa-solid fa-lock" style="padding-left:10px ;"></i> -->
                        <span>Activating</span>
                        </a>
                    </li>
                    <li id="ex">
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="watch1.php">
                        <i class="fa-solid fa-chalkboard-user fa-fw"></i>
                        
                        <span id="myBtn" class="php">Explanations</span>
                        </a>
                    </li>
                    <li id="lo">
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="">
                        <i class="fa-solid fa-chalkboard-user fa-fw"></i>
                        <i class=" pl-10 fa-solid fa-lock" style="padding-left:10px ;"></i>
                        
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
                        <a class=" d-flex algin-center fs-14 c-black rad-6 p-10" href="../signup/forgot-password.php">
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
      <div class="content w-full">
        <!-- Start Head -->
        <div class="head bg-white p-15 between-flex">
          <div class="search p-relative">
            <input class="p-10" type="search" placeholder="Type A Keyword" />
          </div>
          <div class="icons d-flex align-center">
            <span class="notification p-relative">
              <i class="fa-regular fa-bell fa-lg"></i>
            </span>
            <img src="imgs/avatar.png" alt="" />
          </div>
        </div>
        <!-- End Head -->
        <h1 class="p-relative">Profile</h1>
        <div class="profile-page m-20">
          <!-- Start Overview -->
          <div class="overview bg-white rad-10 d-flex align-center">
            <div class="avatar-box txt-c p-20">
              <img class="rad-half mb-10" src="imgs/avatar.png" alt="" />
              <h3 class="m-0"><?php
                                if (mysqli_num_rows($query) > 0) {
                                            $row = mysqli_fetch_assoc($query);
                                            $t = mysqli_fetch_assoc($ti);
                                            echo " " . $row['name'] ;
                                            // " <a href='../signup/logout.php'>Logout</a>"
                                        }

                            ?></h3>

            </div>
            <div class="info-box w-full txt-c-mobile">
              <!-- Start Information Row -->
              <div class="box p-20 d-flex align-center">
                <!-- <h4 class="c-grey fs-15 m-0 w-full">General Information</h4> -->
                <div class="fs-14">
                  <span class="c-grey">Full Name</span>
                  <span><?php
                                if (mysqli_num_rows($query2) > 0) {
                                            $row2 = mysqli_fetch_assoc($query2);
                                            echo " " . $row['name'] ;
                                            // " <a href='../signup/logout.php'>Logout</a>"
                                        }

                            ?></span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Country:</span>
                  <span>Egypt</span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Accout Status:</span>
                  <span class="c-green" style="font-weight: 700;"><div id="not">
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
                                    </div></span>
                </div>

              </div>
              <!-- End Information Row -->
              <!-- Start Information Row -->
              <div class="box p-20 d-flex align-center">
                <div class="fs-14">
                  <span class="c-grey">Phone:</span>
                  <span><p><?php
                                if (mysqli_num_rows($query3) > 0) {
                                            $row3 = mysqli_fetch_assoc($query3);
                                            echo $row3['father_number'] ;
                                            // " <a href='../signup/logout.php'>Logout</a>"
                                        }

                            ?></p></span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Group:</span>
                  <span>
                    <?php
                  
                      if (mysqli_num_rows($query4) > 0) {
                                  $row4 = mysqli_fetch_assoc($query4);
                                  echo $row4['groupp'] ;
                                  // " <a href='../signup/logout.php'>Logout</a>"
                      }

                    ?>
                    </span>
                </div>
                <div class="fs-14">
                  <span class="c-grey">Email:</span>
                  <span><?php
                  
                  if (mysqli_num_rows($query5) > 0) {
                              $row5 = mysqli_fetch_assoc($query5);
                              echo $row5['email'] ;
                              // " <a href='../signup/logout.php'>Logout</a>"
                  }

                ?></span>

                </div>

              </div>
              <!-- End Information Row -->

            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
