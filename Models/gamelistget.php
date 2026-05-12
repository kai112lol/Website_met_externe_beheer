<?php
require_once __DIR__ . "/config.php";

class Game
{
    private PDO $conn;

    public function __construct()
    {
        global $conn;
        $this->conn = $conn;
    }

    public function all(): array
    {
        $sql = "SELECT g.game_id, g.title, g.description, g.released_at,
                       g.personal_rating, ge.name AS genre_name,
                       p.name AS platform_name, g.rawg_id,
                       g.rawg_rating, g.created_at, g.updated_at
                FROM games g
                LEFT JOIN genres ge ON g.genre_id = ge.genre_id
                LEFT JOIN platforms p ON g.platform_id = p.platform_id
                ORDER BY g.game_id DESC";

        return $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}