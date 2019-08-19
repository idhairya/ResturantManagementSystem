<?php
    if(isset($_POST['ITEM_ID']) && isset($_POST['ITEM_NAME']) && isset($_POST['ITEM_RATE']) && isset($_POST['CATEGORIES_ID'])):
    $itemid = $_POST['ITEM_ID'];
    $itemname = $_POST['ITEM_NAME'];
    $itemrate = $_POST['ITEM_RATE'];
    $categoriesid = $_POST['CATEGORIES_ID'];

    $link = new mysqli('localhost','root','','restaurant');

    if($link->connect_error)
        die('connection error: '.$link->connect_error);

    $sql3 = "INSERT INTO MENU(item_id,item_name,item_rate,categories_id) VALUES('".$itemid."', '".$itemname."','".$itemrate."','".$categoriesid."')";

    $result = $link->query($sql3); 

    if($result > 0):
        echo 'Successfully Inserted into MENU table.';
    else:
        echo 'Unable to post';
    endif;

    $link->close();
    die();
    endif; 
?>
 