<?php
include("connect.php");
if (isset($_POST['submit'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    $adr = $_POST['adr'];
    $comp = $_POST['comp'];
    // image file directory
    $target = "../img/".basename($image);

    $sql = "INSERT INTO complaint( adr, image, cmp) VALUES ('$adr','$image','$comp')";
    // execute query
    $stmt=  mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        header("Location: ../index.html");
    }
}
?>