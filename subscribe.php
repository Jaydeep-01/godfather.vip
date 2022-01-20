<?php 

include_once 'database/dbh.inc.php';

function valid_email($email) {
    return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) ? FALSE : TRUE;
}
    
if (isset($_GET['email'])) {
	$email = $_GET['email'];
	$modify_date = date('d-m-yy : H:i:s A');
	if(!valid_email($email)){
        exit;
    }else{
        $sql = mysqli_query($conn, "INSERT INTO newsletter(email, modify_date) VALUES('$email','$modify_date') ");
    }
}


?>