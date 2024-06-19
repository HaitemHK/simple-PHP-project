<?php
require 'db.php';

$stmt = $con->query("SELECT * FROM consommateur");
$cmteurs = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liste des Enfants</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<nav class="text-center fs-2 fw-bold bg-success text-light pt-3 pb-3 mb-4">DASHBOARD</nav>
    <a href="add.php" class="btn btn-primary text-light mb-3">New client</a>
    <table class="table table-hover">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>E-mail</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($cmteurs as $c): ?>
        <tr>
            <td><?php echo($c['full_name']); ?></td>
            <td><?php echo($c['age']); ?></td>
            <td><?php echo ($c['email']); ?></td>
            <td>
                <a href="modify.php?id=<?php echo $c['id']; ?>" class="btn btn-warning text-light">Modifier</a>
                <a href="delete.php?id=<?php echo $c['id']; ?>" class="btn btn-warning text-light">Supprimer</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>