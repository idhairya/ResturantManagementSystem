<?php
    if(isset($_POST['CUST_NAME']) && isset($_POST['TABLE_ID'])&& isset($_POST['ITEM_ID'])&& isset($_POST['ORD_ID'])&& isset($_POST['MGR_ID'])):
    $custname = $_POST['CUST_NAME'];
    $tableid = $_POST['TABLE_ID'];
    $itemid = $_POST['ITEM_ID'];
    $ordid = $_POST['ORD_ID'];
    $mgrid = $_POST['MGR_ID'];

    $link = new mysqli('localhost','root','','restaurant');

    if($link->connect_error)
        die('connection error: '.$link->connect_error);

    $sql3 = "INSERT INTO CUSTOMERS(cust_name, table_id,item_id,ord_id,mgr_id) VALUES('".$custname."', '".$tableid."','".$itemid."','".$ordid."','".$mgrid."')";

    $result = $link->query($sql3); 

    if($result > 0):
        echo 'Successfully Inserted into CUSTOMERS table.';
    else:
        echo 'Unable to post';
    endif;

    $link->close();
    die();
    endif; 
?>

