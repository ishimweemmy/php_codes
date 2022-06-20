<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>display</title>
  </head>
  <style>
    *{
      padding: 0;
      box-sizing: border-box;
      margin: 0;
    }
    .update{
        background: magenta;
        width: 8rem;
        height: 2.5rem;
        box-sizing: border-box;
        border: none;
        border-radius: .2rem;
        color: white;
    }

    .delete{
        background: red;
        width: 8rem;
        height: 2.5rem;
        box-sizing: border-box;
        border: none;
        border-radius: .2rem;
        color: white;
    }
     .buttons{
        display: flex;
        gap: 2rem;
    }

    td{
      height: 7rem;
      padding: 2rem;
    }
    .profile{
      width: 10rem;
      height: 100%;
      background-color: yellow;
    }
    .profile div{
      width: 4rem;
      height: 4rem;
      border-radius: 100%;
      background: yellow
    }
    body{
      width: 100vw;
      display: grid;
      place-items: center;
    }
    .img{
      border-radius: 100%;
      height: 100%;
    }
  </style>
  <body>
  

  <div class="content">
    
    <div class="container">
      <div class="table-responsive custom-table-responsive">
        <table class="table custom-table">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">id</th>
              <th scope="col">profile</th>
              <th scope="col">Username</th>
              <th scope="col">email</th>
              <th scope="col">password</th>
              <th scope="col">update or delete</th>
            </tr>
          </thead>
          <tbody>
            <?php
            
            include "connect.php";

            $sql = "SELECT * FROM `users`";
            $result = mysqli_query($connection, $sql);

            if($result){
                while($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $username = $row['username'];
                    $email = $row['email'];
                    $password = password_hash($row['password'], PASSWORD_DEFAULT);

                    echo '<tr scope="row">
                            <th scope="row"></th>
                            <td>
                                '.$id.'
                            </td>
                            <td class="profile"><div><img class="img" width="100%" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"></div></td>
                            <td><a href="#">'.$username.'</a></td>
                            <td>
                                '.$email.'
                            </td>
                            <td>'.$password.'</td>
                            <td class="buttons">
                                <button class="update"><a href="update.php?updateId='.$id.'">Update</a></button>
                                <button class="delete"><a href="delete.php?deleteId='.$id.'">Delete</a></button>
                            </td>
                        </tr>
                <tr class="spacer"><td colspan="100"></td>
                </tr>';
                }
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
    <!-- <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script> -->
  </body>
</html>