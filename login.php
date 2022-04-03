<?php
$con = mysqli_connect('localhost', 'root', '', 'fbdatabase');
$phoneoremail = $_POST['phoneoremail'];
$password = $_POST['password'];

$check_data = mysqli_query(
    $con,
    "SELECT * FROM userdata WHERE phoneoremail = '$phoneoremail' and password = '$password'"
);
$check = mysqli_num_rows($check_data);

if ($check > 0) {
    header(
        'Location:http://localhost/facebook-clone-boilerplate-main/mainpage.html'
    );
} else {
    header('Location:http://localhost/facebook-clone-boilerplate-main');
}

?>
