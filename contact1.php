<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<div class="box">
    <h2>send messege</h2>
    <form action="sql.php">
      <div class="input-box">
        <input type="text" name="username"  autocomplete="off" required>
        <label for="">Name</label>
      </div>
      <div class="input-box">
        <input type="email" name="email"  autocomplete="off" required>
        <label for="">Email</label>
      </div>
      <div class="input-box">
        <input type="number" name="phonenumber"  autocomplete="off" required>
        <label for="">Phone number</label>
      </div>
      <div class="input-box">
        <input type="text" name="reason-to-contact"  autocomplete="off" required>
        <label for="">Reason to contact</label>
      </div>
        <input type="submit" value="Save">
    </form>
  </div>
</body>
</html>