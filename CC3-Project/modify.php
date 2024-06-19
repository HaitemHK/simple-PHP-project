
<?php
require 'db.php';

$id = $_GET['id'];

$stmt = $con->prepare("SELECT * FROM consommateur WHERE id = ?");
$stmt->execute([$id]);
$client = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modify</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <nav class="text-center fs-2 fw-bold bg-success text-light pt-3 pb-3 mb-4">Modifiy a client</nav>
    <form method="POST">
        <label class="form-label">Name: 
        <input class="form-control" type="text" name="name" value="<?php echo ($client['full_name']); ?>" required></label><br>
        <label class="form-label">Age: 
        <input class="form-control" type="number" name="age" value="<?php echo ($client['age']); ?>" required></label><br>
        <label class="form-label">E-mail: 
        <input class="form-control" type="text" name="grade" value="<?php echo ($client['email']); ?>" required></label><br>
        <input type="submit" value="Modify" class="btn btn-success text-light">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email= $_POST['email'];

    $stmt = $con->prepare("UPDATE consommateur SET full_name = ?, age = ?, email = ? WHERE id = ?");
    $stmt->execute([$name, $age, $email, $id]);

    header("Location: showData.php");
    exit;
}