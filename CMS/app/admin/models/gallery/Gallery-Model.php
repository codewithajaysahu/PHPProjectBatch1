<?php

include_once("app/config/database.php");

function getGalleryImagesList($start_limit, $end_limit) {
    $search_query = null; // login error
    $dbConn = getDBConnection();
    $module = $_GET['module'];
    if(@$_GET['search']) {
        $search = $_GET['search'];
        $search_query = " AND (name LIKE '$search%') ";
    }

    $limit_query = "LIMIT $start_limit, $end_limit";
    $query = " SELECT g.name, g.created, g.modified, d.name image FROM gallery g
                INNER JOIN modules m ON m.id = g.`module_id`
                INNER JOIN documents d ON d.`module_id` = g.`module_id`
                WHERE m.name = '$module' ";
    if($search_query)
        $query .= $search_query;
    $query .= $limit_query;

    $res_query = mysqli_query($dbConn, $query);
    if($res_query){
        $result = $res_query;
    }else{
        $msg = mysqli_error($dbConn);
        file_put_contents('logs/error.log', $msg, FILE_APPEND | LOCK_EX );
        echo mysqli_error($dbConn);die;
    }
    mysqli_close($dbConn);

    return $result;
}

function getGalleryImagesCount() {
    $search_query = null;
    $dbConn = getDBConnection();
    $module = $_GET['module'];
    if(@$_GET['search']) {
        $search = $_GET['search'];
        $search_query = " AND (name LIKE '$search%') ";
    }
    $query = " SELECT count(1) total_rows FROM gallery g
                INNER JOIN modules m ON m.id = g.`module_id`
                INNER JOIN documents d ON d.`module_id` = g.`module_id`
                WHERE m.name = '$module' ";
    if($search_query)
        $query .= $search_query;
    $res_query = mysqli_query($dbConn, $query);
    if($res_query){
        $result = mysqli_fetch_row($res_query);
        $count = $result[0];
    }else{
        $msg = mysqli_error($dbConn);
        file_put_contents('logs/error.log', $msg, FILE_APPEND | LOCK_EX );
        echo mysqli_error($dbConn);die;
    }
    mysqli_close($dbConn);

    return $count;
}

function setGalleryImage()
{
    $module_id = 6;
    $today = date("Y-m-d H:i:s");
    $dbConn = getDBConnection();
    $name = $_POST['name'];
    $query = " INSERT INTO gallery (name, module_id, created, modified)
 VALUES('$name', '$module_id', '$today', '$today')";
    $insert_res = mysqli_query($dbConn, $query);

    // gallery_id

    // Document
    $image = $_POST['image'];
    $query = " INSERT INTO document (module_id, record_id, name, original_name, file_path, created, modified)
 VALUES('$name', '$module_id', '$today', '$today')";
    mysqli_query($dbConn, $query);

    mysqli_close($dbConn);
    die("Done");
// return $result;
}