<?php
    include 'config.php';
    switch($_REQUEST['button']) {

        case 'Login':
          $email = mysqli_real_escape_string($conn, $_POST['email']);
          $password = mysqli_real_escape_string($conn, md5($_POST['password']));
          $sql = "SELECT * FROM users WHERE email='{$email}' AND password='{$password}'";
          $result = mysqli_query($conn, $sql);
        

          if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            
            $_SESSION['user_name'] =$roww;
            $_SESSION['SESSION_EMAIL'] = $email;

                
            header("Location: ../profile/dashboard.php");

          } else {
            $msg = "<div class='alert alert-danger'>Email or password do not match.</div>";
          }
          case 'Signup':
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $group = mysqli_real_escape_string($conn, $_POST['groupp']);
            // $gender = mysqli_real_escape_string($conn, $_POST['gender']);
            $father_number = mysqli_real_escape_string($conn, $_POST['father_number']);
            $password = mysqli_real_escape_string($conn, md5($_POST['password']));
            $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirm-password']));
            $code = mysqli_real_escape_string($conn, md5(rand()));
            $tim = date("H:i", strtotime("+0 HOURS"));
            $date = date("Y-m-d", strtotime("+0 HOURS"));
            $act = 'no';

            if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'")) > 0) {
                $msg2 = "<div class='alert alert-danger'>{$email} - This email address has been already exists.</div>";
            } else {
                if ($password === $confirm_password) {
                
                    $sql = "INSERT INTO users (name, groupp,father_number,email,gender, password, code) VALUES ('{$name}', '{$group}','{$father_number}','{$email}', 'hell','{$password}', '{$code}')";
                    $queryy = mysqli_query($conn, "SELECT * FROM timee WHERE time_id");
                
                    $sqll = "INSERT INTO timee ( student_name,email,time , date) VALUES ('{$name}','{$email}', '{$tim}', '{$date}')";
                    $result = mysqli_query($conn, $sqll);
                
                    $result = mysqli_query($conn, $sql);
                    header("Location: index.php");
            }else {
                $msg2 = "<div class='alert alert-danger'>Password and Confirm Password do not match</div>";
              }
            }

            break;


    }
?>