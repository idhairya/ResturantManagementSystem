<?php
    if(isset($_POST['CATEGORIES_ID']) && isset($_POST['CATEGORIES_DESC'])):
    $categoriesid = $_POST['CATEGORIES_ID'];
    $categoriesdesc = $_POST['CATEGORIES_DESC'];

    $link = new mysqli('localhost','root','','restaurant');

    if($link->connect_error)
        die('connection error: '.$link->connect_error);

    $sql3 = "INSERT INTO CATEGORIES(categories_id, categories_desc) VALUES('".$categoriesid."', '".$categoriesdesc."')";

    $result = $link->query($sql3); 

    if($result > 0):
        echo 'Successfully Inserted into CATEGORIES table.';
    else:
        echo 'Unable to post';
    endif;

    $link->close();
    die();
    endif; 
?>

