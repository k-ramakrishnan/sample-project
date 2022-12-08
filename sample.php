<?php 
function getFranchise($email){
    $query=mysqli_query($con,"select * from users where email='$email'");
    $result=mysqli_fetch_array($query);
    return $result;
}

function ifSapNumberExist($sapNo){
    $sapNo = ($sapNo) ? $sapNo : '';
    return $sapNo;
}

function ifStoreCodeExist($storeCode){
    $storeCode = ($storeCode) ? $storeCode : '';
    return $storeCode;
}
?>
