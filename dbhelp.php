<?php
require_once ('config.php');


// insert, update, delete
function execute($sql){
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    //query 
    mysqli_query($conn,$sql);
    //close connection
    mysqli_close($conn);
}
// select
function executeResult($sql){
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    //query 
    $resultset = mysqli_query($conn,$sql);
    $list = [];
    while($row = mysqli_fetch_array($resultset,1)){
        $list[] = $row;
    }
    //close connection
    mysqli_close($conn);
    return $list;

}