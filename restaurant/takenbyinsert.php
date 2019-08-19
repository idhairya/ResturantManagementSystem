<?php
    if(isset($_POST['ORD_ID']) && isset($_POST['MGR_ID'])):
    $ordid = $_POST['ORD_ID'];
    $mgrid = $_POST['MGR_ID'];

    $link = new mysqli('localhost','root','','restaurant');

    if($link->connect_error)
        die('connection error: '.$link->connect_error);

    $sql3 = "INSERT INTO TAKEN_BY(ord_id,mgr_id) VALUES('".$ordid."', '".$mgrid."')";

    $result = $link->query($sql3); 

    if($result > 0):
        echo 'Successfully Inserted into TAKEN_BY table.';
    else:
        echo 'Unable to post';
    endif;

    $link->close();
    die();
    endif; 
?> 