<?php
    $sql = "SELECT g.game_id, g.title, g.description, g.released_at, g.personal_rating, ge.name AS genre_name, p.name AS platform_name, g.rawg_id, g.rawg_rating, g.created_at, g.updated_at FROM games g LEFT JOIN genres ge ON g.genre_id = ge.genre_id LEFT JOIN platforms p ON g.platform_id = p.platform_id ORDER BY g.game_id DESC";
    $gameresult = $conn->query($sql);
    class GameListController
    {
        private Game $game;
        public function __construct()
        {
            $this->game = new Game();
        }

        public function index(): void
        {
            $game = $this->game->all();
            require __DIR__ . '/../pages/gamelist.php';
        }

        public function creategame(): void
        {
            require __DIR__ .'/../create/gamelistCreate.php';
        }

        public function storegame(): void
        {
            $this->game->creategame($this->getFormData());
            header("Location: gamelist.php");
            exit();
        }

        private function getFormData(): array
        {
            return [
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'released_at' => $_POST['released_at'],
                'rating' => $_POST['rating'],
                'genres' => $_POST['genres'] ?? [],
                'platforms' => $_POST['platforms'] ?? []
            ];
        }
    }
?>