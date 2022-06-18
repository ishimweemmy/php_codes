<?php
include "connect.php";

$id = $_GET['updateId'];
$sql = 'SELECT * FROM `users` WHERE id=$id ';

$name = '';
$email = '';
$mobile = '';
$password = '';

if($result = mysqli_query($con, $sql)) {
    $row = mysqli_fetch_assoc($result);

    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $password = $row['password'];
}

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "UPDATE `users` SET id=$id, name='$name', email='$email', mobile='$mobile', password='$password' WHERE id=$id";

    $result = mysqli_query($con, $sql);

    if($result) {
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class='container my-10'>
        <form method='post' >
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name" autocomplete="off" value = $name<?php echo $name; ?> >
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter your email" autocomplete="off" value = $email<?php echo $email; ?> >
            </div>

            <div class="mb-3">
                <label class="form-label">Mobile</label>
                <input type="number" class="form-control" name="mobile" placeholder="Enter your mobile" autocomplete="off" value = <?php echo $mobile; ?> >
            </div>
            
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter your password" autocomplete="off" value =<?php echo $password; ?> >
            </div>
            <button type="submit" name="update" class="btn btn-primary mt-3">update</button>
        </form>
    </div>
</body>
</html>