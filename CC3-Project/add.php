
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <nav class="text-center fs-2 fw-bold bg-success text-light pt-3 pb-3 mb-4">Add a new client</nav>
    <form method="POST">
        <label class="form-label">name: </label>
        <input type="text" name="name" class="form-control w-50" required><br>
        <label class="form-label">age: </label>
        <input type="number" name="age" class="form-control w-50" required></label><br>
        <label class="form-label">email: </label>
        <input type="email" name="email" class="form-control w-50" required><br>
        <br>
        <input type="submit" value="Add" class="btn btn-success text-light">
    </form>
</body>
</html>

<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];

    $stmt = $pdo->prepare("INSERT INTO consummateur (full_name, age, email) VALUES (?, ?, ?)");
    $stmt->execute([$name, $age, $email]);

    header("Location: showData.php");
    exit;
}
?>