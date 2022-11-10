<?php
 if(isset($_POST['id'])){
    $id = $_POST['id'];
    require_once('dbhelp.php');
    $sql = 'delete from education where id = ' . $id;
    execute($sql);
    echo 'Delete education successfully!';
 }