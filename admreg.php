<?php
require_once("./sql2.php");
if(!empty($_SESSION["id"])){
    header("Location: index.php");
  }
if(isset($_POST["submit"])){
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["cpassword"];
  $users = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($users) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO users (username,email,password) VALUES('$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      '<script>alert("Registered Successfully")</script>';
    }
    else{
      echo
      '<script> alert("Password Does Not Match"); </script>';
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
    <title>Login Page</title>
    <?php include("./scripts.php"); ?>
</head>
<body>
<?php include("./navbar.php"); ?>

<div class="d-flex justify-content-center mt-5">
<div class="card" style="width: 18rem;">
  <img src="https://images.unsplash.com/photo-1509822929063-6b6cfc9b42f2?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870" class="card-img-top" alt="...">
  <div class="card-body">
  <form action="" method="POST">
  <div class="form-group">
    <label for="username">User name</label>
    <input type="text" class="form-control" id="username" name="username">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted" >We'll never share your email with anyone else.</small>
  </div>
  <div class="alert alert-danger" id="wrong-password" role="alert" onkeyup="mail()" style="display:none;">
  Password Doesn't Match
</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" name="cpassword" id="cpassword" onkeyup="check()">
  </div>
  <div class="alert alert-danger" id="wrong-password" role="alert" style="display:none;">
  Password Doesn't Match
</div>
  <button type="submit" value="submit" name="submit" id="button" class="btn btn-primary" disabled>Register</button>
  <small id="emailHelp" class="form-text text-muted">Already have an Account ? <a href="./login.php">Click Here</a></small>
</form>
  </div>
</div>
</div>



<?php include("./footer.php") ?>
<script>
    const password = document.getElementById("password");
    const cpassword = document.getElementById("cpassword");
    const submit = document.getElementById("button");
    const wrongPassword = document.getElementById("wrong-password");
    function check(){
        if(password.value === cpassword.value){
            submit.removeAttribute("disabled");
            wrongPassword.style.display="none";
        }else{
          wrongPassword.style.display="block";
          submit.setAttribute("disabled","true");
        }

      
    }
</script>
    
</body>
</html>