<?php include "./connect.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

     <style>
        a{
            color: white;
        }
        .buttons{
          display: flex;
          gap: 2rem;
        }
     </style>
</head>
<body>
    <div class="container">
        <button class='btn btn-primary'><a href="user.php">Add user</a></button>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "select * from `users`";
    $result = mysqli_query($con, $sql);

    if($result) {
        while($row = mysqli_fetch_assoc($result)){
          $id = $row['id'];
          $name = $row['name'];
          $email = $row['email'];
          $mobile = $row['mobile'];
          $password = $row['password'];

          echo "<tr>
                  <th scope='row'>$id</th>
                  <td>".$name."</td>
                  <td>".$email."</td>
                  <td>".$mobile."</td>
                  <td>".$password."</td>
                  <td class='buttons'>

                    <button class='btn btn-primary'><a href='update.php?updateId=".$id."'>Update</a></button>

                    <button class='btn btn-danger'><a href='delete.php?deleteId=".$id."'>Delete</a></button>

                  </td>
                </tr>";
        }
    }
    ?>
  </tbody>
</table>
    </div>
    <a href="">Update</a>
    <a href=''>Delete</a>
</body>
</html>