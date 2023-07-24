<?php
    include "../admin/connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `messages` where id=$id";
        $conn->query($sql);
    }
    header('location:../admin/messages.php');
    exit;
?>