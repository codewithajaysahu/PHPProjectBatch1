<?php

include_once("app/config/database.php");

function getUsers() {
    $result = false; // login error
    $dbConn = getDBConnection();
    $query = " SELECT * FROM users ";
    $res_query = mysqli_query($dbConn, $query);
    if($res_query){
        if(mysqli_num_rows($res_query) > 0 ){
            $result = $res_query;
        }
    }else{
        $msg = mysqli_error($dbConn);
        file_put_contents('logs/error.log', $msg, FILE_APPEND | LOCK_EX );
        echo mysqli_error($dbConn);die;
    }
    mysqli_close($dbConn);

    return $result;
}

?>