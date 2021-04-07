<?php
include("connect.php");
if (isset($_POST['submit'])) {
    // Get image name
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    // image file directory

    $sql = "SELECT * FROM admin WHERE uname='$uname' AND pass = '$pass'";
    // execute query
    $stmt=  mysqli_query($db, $sql);
    if($stmt->num_rows>0){
        header("Location: ../admin_pan.php?id=$uname");
    }
}
?>