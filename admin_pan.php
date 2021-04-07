<?php
    include('./php/connect.php');
    $uname=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="admin_pan.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
  <link rel="stylesheet" href="table.css">
    <script src="table.js"></script>
</head>

<body style="background:url(pipe.jpg); background-size: cover; ">
<div class="nav-bar">
            <div class="nav-logo">
                <h1><span>Reported</span> Issues</h1>
            </div>
            <div class="nav-links" id="nav-links">
            <i class="fa fa-close" onclick="closeMenu()"></i>
            <a href="./php/logout.php"><button class="btn">Logout</button></a>
                
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </div>
<?php
        $sql = "SELECT  *  FROM  complaint";
        $stmt = mysqli_query($db,$sql);
?>
  
        <div class="main">
          
            <div class="main2">
                
        
                
                <table  class="table-hover"  id="myTable">
                    <tr>
                        <th>id</th>
                        <th>Adress</th>
                        <th>Complaint</th>
                        <th>Image</th>
                    </tr>
                    <?php
            if($stmt->num_rows>0){
                while($row = $stmt->fetch_assoc()){
          ?>

                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['adr'];?></td>
                        <td><?php echo $row['cmp'];?></td>
                        <td><img src="./img/<?php echo $row['image'];?>" alt="" width="200px" height="200px"></td>
                    </tr>
                    <?php
                }
            }
          ?>
                </table>
            </div>
        </div>
  <?php
?>

</body>

</html>