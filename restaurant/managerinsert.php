<?php
    if(isset($_POST['MGR_ID']) && isset($_POST['NAME']) && isset($_POST['ADDRESS']) && isset($_POST['SALARY'])):
    $mgrid = $_POST['MGR_ID'];
    $name = $_POST['NAME'];
    $address = $_POST['ADDRESS'];
    $salary = $_POST['SALARY'];

    $link = new mysqli('localhost','root','','restaurant');

    if($link->connect_error)
        die('connection error: '.$link->connect_error);

  $sql3 = "INSERT INTO MANAGER(mgr_id,name,address,salary) VALUES('".$mgrid."', '".$name."','".$address."','".$salary."')";
    $result = $link->query($sql3); 

    if($result > 0):
        echo 'Successfully Inserted into MANAGER table.';
    else:
        echo 'Unable to post';
    endif;

    $link->close();
    die();
    endif; 
?>
 