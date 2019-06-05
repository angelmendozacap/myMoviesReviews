<?php

require_once '../config.php';
require_once 'DB.php';

class Review
{
    private $connection;
    protected $table = 'reviews';
    function __construct()
    {
        $this->connection = DB::getConnection();
    }
    public function getAllReviews()
    {
        try {
            $query = "SELECT id, image, title, review, score FROM {$this->table}";

            $stmt = $this->connection->prepare($query);
            if ($stmt->execute()) {
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            } else {
                $result = false;
            }
            $stmt = null;
            return $result;
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }
}
