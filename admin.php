<?php 
require_once("./sql2.php");
if(!empty($_SESSION["id"])){
  header("Location: index.html");
}
if(isset($_POST["submit"])){
 // $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: detail.html");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./style8.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: #8e8e8e;">


    <div class="ul">
        <img src="./Rectangle 1 (1).png" alt="">
        <div class="d-flex justify-content-center">
            <div class="ulh">
                <h1>ADMIN LOGIN</h1>
            </div>
            <div class="uli">
                <img class="text-center" src="./gg_profile.png" alt="">
            </div>
            <div class="d-flex justify-content-center">
                <div class="ult">
                <form action="" method="POST">
                <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  <button type="submit" value="submit" name="submit" class="btn btn-primary">Login</button>
  <small id="emailHelp" class="form-text text-muted"><a href="./detail.html"></a></small>
</form>
                        </div>
                        <div class="ult2">
                            <div class="d-flex justify-content-center"><a href="./admreg.php">register</a></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>






















    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx " crossorigin="anonymous "></script>
</body>

</html>