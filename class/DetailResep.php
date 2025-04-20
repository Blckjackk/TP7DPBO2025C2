<?php
class DetailResep {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($resep_id, $bahan_id, $takaran) {
        $query = "INSERT INTO detail_resep (resep_id, bahan_id, takaran) VALUES (:resep_id, :bahan_id, :takaran)";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':resep_id', $resep_id);
        $stmt->bindParam(':bahan_id', $bahan_id);
        $stmt->bindParam(':takaran', $takaran);
        return $stmt->execute();
    }

    public function getByResep($resep_id) {
        $query = "SELECT * FROM detail_resep WHERE resep_id = :resep_id";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':resep_id', $resep_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
