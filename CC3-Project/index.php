<?php
require 'db.php';

$stmt = $con->query("SELECT email,pswd FROM admins");
$cred = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
   <nav class="text-center fs-2 fw-bold bg-success text-light pt-3 pb-3 mb-4">LOGIN</nav>
   <form action="" method="post" >
    <div class="mb-3">
        <label for="mail" class="form-label">Email address</label>
        <input type="email" class="form-control w-50" id="mail" aria-describedby="emailHelp">
        
    </div>
    <div class="mb-3">
        <label for="pswd" class="form-label">Password</label>
        <input type="password" class="form-control w-50" id="pswd">
    </div>

    <input type="submit" name="submit" class= "btn btn-primary text-light" value="Log in">
   </form>
</body>
</html>

<?php
header('Location: showData.php');
