<?php
    if(isset($_POST['MGR_ID']) && isset($_POST['PHONE_NUM'])):
    $mgrid = $_POST['MGR_ID'];
    $phonenum = $_POST['PHONE_NUM'];

    $link = new mysqli('localhost','root','','restaurant');

    if($link->connect_error)
        die('connection error: '.$link->connect_error);

    $sql3 = "INSERT INTO CONTACTS(mgr_id,phone_num) VALUES('".$mgrid."', '".$phonenum."')";

    $result = $link->query($sql3); 

    if($result > 0):
        echo 'Successfully Inserted into contacts table.';
    else:
        echo 'Unable to post';
    endif;

    $link->close();
    die();
    endif; 
?> 