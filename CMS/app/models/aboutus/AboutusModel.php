<?php
include_once("app/config/database.php");
function getContent() {
    $result = null;
    $dbConn = getDBConnection();
    $query = " SELECT * FROM aboutus WHERE status = 'publish' AND deleted = 0 ORDER BY sequence";
    $query = mysqli_query($dbConn, $query);
    mysqli_close($dbConn);
  /*  if (mysqli_num_rows($query) > 0) {
        $result = mysqli_fetch_assoc($query);
    }

    print_r($result);die;*/
    return $query;
}
?>