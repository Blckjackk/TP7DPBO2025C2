<?php
require_once 'config/db.php';
require_once 'class/Resep.php';
require_once 'class/Bahan.php';
require_once 'class/DetailResep.php';

$resep = new Resep($pdo);
$bahan = new Bahan($pdo);
$detail = new DetailResep($pdo);

if (isset($_POST['add_resep'])) {
    $resep->create($_POST['nama_resep'], $_POST['deskripsi'], $_POST['waktu_masak']);
}
if (isset($_POST['add_bahan'])) {
    $bahan->create($_POST['nama_bahan']);
}
if (isset($_POST['add_detail'])) {
    $detail->create($_POST['id_resep'], $_POST['id_bahan'], $_POST['takaran']);
}

include 'view/header.php';
?>

<main>
    <div class="container">
        <h2>Selamat Datang di Resep Makanan Online</h2>
        <nav class="nav-bar">
            <a href="?page=resep">Resep</a> |
            <a href="?page=bahan">Bahan</a> |
            <a href="?page=detail">Detail Resep</a>
        </nav>
        <hr>

        <div class="content">
            <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                if ($page == 'resep') include 'view/resep_form.php';
                elseif ($page == 'bahan') include 'view/bahan_form.php';
                elseif ($page == 'detail') include 'view/detailresep_form.php';
            } else {
                include 'view/card_resep.php';
            }
            ?>
        </div>
    </div>
</main>

<?php include 'view/footer.php'; ?>
