<?php
$conn = mysqli_connect("login-do-user-12560860-0.b.db.ondigitalocean.com", "doadmin", "AVNS_OXtkLSFhlOIvZi-wEig", "login", 25060);
$n=10;
function getName($n) {
	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$randomString = '';

	for ($i = 0; $i < $n; $i++) {
		$index = rand(0, strlen($characters) - 1);
		$randomString .= $characters[$index];
	}

	return $randomString;
}

$l= getName($n);
$sql = "INSERT INTO coupon (code,status) VALUES ('{$l}', 'Valid')";
$resultt = mysqli_query($conn, $sql);





?>
