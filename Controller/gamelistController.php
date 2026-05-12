<?php
    require_once __DIR__ . "/../Models/gamelistget.php";
    class GameListController
    {
        private Game $game;

        public function __construct()
        {
            $this->game = new Game();
        }

        public function index(): void
        {
            $gameresult = $this->game->all();

        require __DIR__ . '/../views/gamelistView.php';
        }

        public function create(): void
        {
            require __DIR__ .'/../create/gamelistCreate.php';
        }

        public function store(): void
        {
            $this->game->create($this->getFormData());
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