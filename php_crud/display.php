<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>display</title>
  </head>
  <style>
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
  </style>
  <body>
  

  <div class="content">
    
    <div class="container">
      <div class="table-responsive custom-table-responsive">

        <table class="table custom-table">
          <thead>
            <tr>  

              <th scope="col">
                <label class="control control--checkbox">
                  <input type="checkbox"  class="js-check-all"/>
                  <div class="control__indicator"></div>
                </label>
              </th>
              
              <th scope="col">id</th>
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
                            <th scope="row">
                                <label class="control control--checkbox">
                                <input type="checkbox"/>
                                <div class="control__indicator"></div>
                                </label>
                            </th>
                            <td>
                                '.$id.'
                            </td>
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
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>