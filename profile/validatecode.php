<?php
	require_once 'connect.php';

session_start();
                
if (!isset($_SESSION['SESSION_EMAIL'])) {
    header("Location: ../signup/index.php");
    die();
}
$link = mysqli_connect("login-do-user-12560860-0.b.db.ondigitalocean.com", "doadmin", "AVNS_OXtkLSFhlOIvZi-wEig", "login", 25060);
$code=$_POST["activeac"];

$query = mysqli_query($conn, "SELECT * FROM `coupon` WHERE `code` = '$code' && `status` = 'Valid'") or die(mysqli_error());
$count = mysqli_num_rows($query);
$fetch = mysqli_fetch_array($query);
$array = array();
if($count > 0){
    $sql = "UPDATE `coupon` SET `status`='invalid' WHERE code='$code'";
    $sql2 = "UPDATE `users` SET `active`='Yes' WHERE email='{$_SESSION['SESSION_EMAIL']}'";
    if(mysqli_query($link, $sql)){
        $ms= "Your Account";
        echo $ms;
    } 
    if(mysqli_query($conn, $sql2)){
        $ms2="Has Been Sucessfully Activated";
        echo $ms2;
    } 
}else {
    echo "Invalid Code";
   die();

}
?>


<html>
<body>

Welcome <?php echo $_POST["activeac"]; ?><br>
<!-- Your email address is: <?php echo $_POST["email"]; ?> -->

</body>
</html>