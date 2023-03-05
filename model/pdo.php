<?php

function pdo_get_connection()
{
    $dburl = "mysql:host=localhost;dbname=duanmau2023";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new PDO($dburl, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}
/** 
 * thuc thi cau lenh sql thao tac du lieu insert update delete
 * @throws PDOException loi thuc thi cau lenh
 */
function pdo_execute($sql){
    $sql_args = array_slice(func_get_args(), 1);  //  lấy tất  cả các biến truyền vào function
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}

/** 
 * thuc thi cau lenh sql thao tac du lieu select
 * @throws PDOException loi thuc thi cau lenh
 */
function pdo_query($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetchAll();
        return $rows;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}
/** 
 * thuc thi cau lenh sql truy van mot ban ghi
 * @throws PDOException loi thuc thi cau lenh
 */
function pdo_query_one($sql){
    $sql_args = array_slice(func_get_args(), 1);
    try{
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->execute($sql_args);
        $rows = $stmt->fetch(PDO::FETCH_ASSOC);
        return $rows;
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}

?>