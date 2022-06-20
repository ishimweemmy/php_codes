<?php
include "connect.php";

$id = $_GET['updateId'];

$sql = "SELECT * FROM `users` WHERE `id` =$id";
$result = mysqli_query($connection, $sql);

$row = mysqli_fetch_assoc($result);

$username = $row['username'];
$email = $row['email'];
$password = password_hash($row['password'], PASSWORD_DEFAULT);

if(isset($_POST['update'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($username === '') {
        echo "username can't be empty";
    }elseif($email === '') {
        echo "email can't be empty";
    }elseif($password === '') {
        echo "password can't be empty";
    }else{
        $sql = "UPDATE `users` SET username='$username', email='$email', password='$password' WHERE id=$id";
        $result = mysqli_query($connection, $sql);
        
        if($result) {
            header("location:display.php");
        }else{
            die(mysqli_error($connection));
        }
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    body {
        background: black;
        display: grid;
        width: 100vw;
        height: 100vh;
        place-items: center;
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #BA68C8
    }

    .profile-button {
        background: rgb(99, 39, 120);
        box-shadow: none;
        border: none
    }

    .profile-button:hover {
        background: #682773
    }

    .profile-button:focus {
        background: #682773;
        box-shadow: none
    }

    .profile-button:active {
        background: #682773;
        box-shadow: none
    }

    .back:hover {
        color: #682773;
        cursor: pointer;
    }

    .labels {
        font-size: 11px
    }

    .add-experience:hover {
        background: #BA68C8;
        color: #fff;
        cursor: pointer;
        border: solid 1px #BA68C8;
    }
</style>
<body>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?php echo $username ?></span><span class="text-black-50"><?php echo $email ?></span><span> </span></div>
        </div>
        <form method="post" class="col-md-5 border-right">
            <!-- <div > -->
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">Username</label><input type="text" class="form-control" placeholder="Username" value="<?php echo $username ?>" name='username'></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="enter email id" value=<?php echo $email  ?> name='email'></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Password</label><input type="text" class="form-control" placeholder="enter email id" value=<?php echo $password  ?> name='password' ></div>
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" name='update' type="submit">Save Profile</button></div>
                </div>
            <!-- </div> -->
        </form>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>