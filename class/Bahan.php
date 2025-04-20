<?php
class Bahan {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($nama_bahan) {
        $query = "INSERT INTO bahan (nama_bahan) VALUES (:nama_bahan)";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':nama_bahan', $nama_bahan);
        return $stmt->execute();
    }

    public function getAll() {
        $query = "SELECT * FROM bahan";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
