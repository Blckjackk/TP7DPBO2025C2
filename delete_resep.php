<?php
include_once 'config/db.php';
include_once 'class/Resep.php';

$db = new DB();
$resep = new Resep($db);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $resep->delete($id);
    header("Location: index.php");
    exit();
} else {
    echo "ID resep tidak ditemukan.";
}
?>
