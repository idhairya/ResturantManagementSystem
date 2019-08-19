<?php
    if(isset($_POST['TABLE_ID']) && isset($_POST['MGR_ID']) && isset($_POST['TABLE_CAPACITY'])):
    $tableid = $_POST['TABLE_ID'];
    $mgrid = $_POST['MGR_ID'];
    $tablecapacity = $_POST['TABLE_CAPACITY'];

    $link = new mysqli('localhost','root','','restaurant');

    if($link->connect_error)
        die('connection error: '.$link->connect_error);

    $sql3 = "INSERT INTO TABLE_BOOKING(table_id,mgr_id,table_capacity) VALUES('".$tableid."', '".$mgrid."','".$tablecapacity."')";

    $result = $link->query($sql3); 

    if($result > 0):
        echo 'Successfully Inserted into TABLE_BOOKING table.';
    else:
        echo 'Unable to post';
    endif;

    $link->close();
    die();
    endif; 
?>
 