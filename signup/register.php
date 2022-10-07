
<?php
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\SMTP;
    // use PHPMailer\PHPMailer\Exception;

    session_start();
    if (isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: welcome.php");
        die();
    }

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    include 'config.php';
    $msg = "";

    if (isset($_POST['submit'])) {
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
            $msg = "<div class='alert alert-danger'>{$email} - This email address has been already exists.</div>";
        } else {
            if ($password === $confirm_password) {

                $sql = "INSERT INTO users (name, groupp,father_number,email,gender, password, code) VALUES ('{$name}', '{$group}','{$father_number}','{$email}', 'hell','{$password}', '{$code}')";
                $queryy = mysqli_query($conn, "SELECT * FROM timee WHERE time_id");

                $sqll = "INSERT INTO timee ( student_name,email,time , date) VALUES ('{$name}','{$email}', '{$tim}', '{$date}')";
                $result = mysqli_query($conn, $sqll);

                $result = mysqli_query($conn, $sql);
                header("Location: ../signup/index.php");
        }else {
                $msg = "<div class='alert alert-danger'>Password and Confirm Password do not match</div>";
              }
    }
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Sign Up</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Login Form" />
    <!-- //Meta tag Keywords -->

    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- form section start -->
    <section class="w3l-mockup-form">
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="alert-close">
                        <span class="fa fa-close"></span>
                    </div>
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/cat.png" alt="" width="300px">
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2>Register Now</h2>
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p> -->
                        <?php echo $msg; ?>
                        <form action="" method="post">
                            <input type="text" class="name" name="name" placeholder="Enter Your Name" value="<?php if (isset($_POST['submit'])) { echo $name; } ?>" required>
                            <input type="text" class="p" name="groupp" placeholder="Enter Your Group" value="<?php if (isset($_POST['submit'])) { echo $group; } ?>" required>
<!--                             
                            <label for="Group" style="color: gray;">Group</label>
                            <form name="groupp" action="<?php if (isset($_POST['submit'])){ echo $group;}?>">
                                <select name="groupp" id="Group" style="background-color: #00C16E;color: white;border-radius: 6px;position: relative;text-align: center;right: -30%;margin-bottom: 20px;border: 1px solid;padding: 10px;">
                                    <option value="sat1">السبت والثلاثاء 7.5</option>
                                    <option value="sat2">السبت والثلاثاء 10.5</option>
                                    <option value="sat3">السبت والثلاثاء 1</option>
                                    <option value="sun1">الأحد والأربعاء 7.5</option>
                                    <option value="sun2">الأحد والأربعاء 10.5</option>
                                    <option value="sun3">الأحد والأربعاء 1</option>
                                    <option value="mon1">الأثنين والخميس 7.5</option>
                                    <option value="mon2">الأثنين والخميس 10.5</option>
                                    <option value="mon3">الأثنين والخميس 1</option>
                                </select>
                            </form>

                            <label for="gender" style="color: gray;">Gender</label>
                            <form name="gender" action="<?php if (isset($_POST['submit'])){ echo $gender;}?>">
                                <select name="department" id="gender" style="background-color: #00C16E;color: white;border-radius: 6px;position: relative;text-align: center;right: -52%;margin-bottom: 20px;border: 1px solid;padding: 10px;top: -60px;">
                                    <option value="sat1">Male</option>
                                    <option value="sat1">Femal</option>
                                </select>
                            <input type="submit" id="loginbtn" name="submit"/>
                            </form> -->
                            <input type="text" class="father_number" name="father_number" placeholder="Your Father Number" value="<?php if (isset($_POST['submit'])) { echo $group; } ?>" required>
                            <input type="email" class="email" name="email" placeholder="Enter Your Email" value="<?php if (isset($_POST['submit'])) { echo $email; } ?>" required>
                            <input type="password" class="password" name="password" placeholder="Enter Your Password" required>
                            <input type="password" class="confirm-password" name="confirm-password" placeholder="Enter Your Confirm Password" required>
                            <button name="submit" class="btn" type="submit">Register</button>
                        </form>
                        <div class="social-icons">
                            <p>Have an account! <a href="index.php">Login</a>.</p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- //form -->
        </div>
    </section>
    <!-- //form section start -->

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