<?php

include_once("app/config/database.php");
//var_dump($conn);

function setRegister()
{
    $dbConn = getDBConnection();
    $username = $_POST['user_name'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $password = $_POST['password'];
    $password = md5($password);
// add other fields
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $course = implode(',', $_POST['course']);
    $gender = $_POST['gender'];


 $query = " INSERT INTO users (user_name, first_name, last_name, password,email,address,mobile,country,state,zip,course,gender)
 VALUES('$username', '$first_name', '$last_name', '$password','$email ','$address','$mobile','$country','$state','$zip','$course','$gender')";
 mysqli_query($dbConn, $query);

mysqli_close($dbConn);
    die("Done");
// return $result;
}

function setLogin() {
    $status = false; // login error
    $dbConn = getDBConnection();
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $password = md5($password);
    $query = " SELECT * FROM users WHERE user_name = '$user_name' AND password = '$password'";
    $query = mysqli_query($dbConn, $query);
    //mysqli_close($dbConn);
    if(mysqli_num_rows($query) > 0 ){
        $result = mysqli_fetch_assoc($query);
        $user_name = $result['user_name'];
        $id = $result['id'];
        $_SESSION['username'] = $user_name;
        $_SESSION['id'] = $id;
        $status = true;
    }
    return $status;
}

?>