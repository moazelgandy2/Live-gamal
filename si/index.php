<!-- <?php
    session_start();
    if (isset($_SESSION['SESSION_EMAIL'])) {
      header("Location: welcome.php");
      // header("Location: index.php");
      die();
  }

  include 'config.php';
  $msg = "";

  if (isset($_GET['verification'])) {
    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE code='{$_GET['verification']}'")) > 0) {
        $query = mysqli_query($conn, "UPDATE users SET code='' WHERE code='{$_GET['verification']}'");

        
        if ($query) {
            $msg = "<div class='alert alert-success'>Account verification has been successfully completed.</div>";
        }
    } else {
        header("Location: index.php");
        
    }
  }

    if ($_POST['Login'] == 'Login') {
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
    }


?> -->




<!-- <?php


    // session_start();
    if (isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: welcome.php");
        die();
    }

    //Load Composer's autoloader
    // require 'vendor/autoload.php';

    include 'config.php';
    $msg2 = "";

    if ($_POST['Signup'] == 'Signup') {
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
    }
?> -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="signup.php" class="sign-in-form" method="POST">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" name="email" class="email" placeholder="Phone Number" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" class="password" placeholder="Password" />
            </div>
            <input type="submit" value="Login" name="button" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <?php echo $msg2; ?>

          <form action="signup.php" method="post" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="name" placeholder="UserName" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email"  name="email" placeholder="Email" value="<?php if (isset($_POST['submit'])) { echo $email; } ?>" required />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password"  placeholder="Password"required />

            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" class="confirm-password" name="confirm-password" placeholder="Enter Your Confirm Password" required>
              
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="text" class="father_number" name="father_number" placeholder="Your Father Number" value="<?php if (isset($_POST['submit'])) { echo $group; } ?>" required>

            </div>
            <div class="input-field">
              <i class="fa-regular fa-user-group"></i>
              <input type="text" name="groupp" placeholder="Enter Your Group" value="<?php if (isset($_POST['submit'])) { echo $group; } ?>" required/>
            </div>
            <input type="submit"  name="button" class="btn" value="Signup" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>

    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function (c) {
            $('.alert-close').on('click', function (c) {
                $('.main-mockup').fadeOut('slow', function (c) {
                    $('.main-mockup').remove();
                });
            });
        });
    </script>
  </body>
</html>


