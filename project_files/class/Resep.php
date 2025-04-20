<?php
class Resep {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($nama_resep, $deskripsi, $waktu_masak) {
        $query = "INSERT INTO resep (nama_resep, deskripsi, waktu_masak) VALUES (:nama_resep, :deskripsi, :waktu_masak)";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':nama_resep', $nama_resep);
        $stmt->bindParam(':deskripsi', $deskripsi);
        $stmt->bindParam(':waktu_masak', $waktu_masak);
        return $stmt->execute();
    }

    public function getResepById($id) {
        $query = "SELECT * FROM resep WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateResep($id, $nama_resep, $deskripsi, $waktu_masak) {
        $query = "UPDATE resep SET nama_resep = :nama_resep, deskripsi = :deskripsi, waktu_masak = :waktu_masak WHERE id = :id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nama_resep', $nama_resep);
        $stmt->bindParam(':deskripsi', $deskripsi);
        $stmt->bindParam(':waktu_masak', $waktu_masak);
        return $stmt->execute();
    }

    public function getAll() {
        $query = "SELECT * FROM resep";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function search($keyword = '') {
        if (empty($keyword)) {
            $stmt = $this->pdo->prepare("SELECT * FROM resep");
        } else {
            $stmt = $this->pdo->prepare("SELECT * FROM resep WHERE nama_resep LIKE :keyword OR deskripsi LIKE :keyword");
            $stmt->bindValue(':keyword', '%' . $keyword . '%');
        }
    
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    
}
?>
