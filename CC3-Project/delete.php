<?php
require 'db.php';

$id = $_GET['id'];

$stmt = $con->prepare("DELETE FROM consommateur WHERE id = ?");
$stmt->execute([$id]);

header("Location: showData.php");
exit;
?>
