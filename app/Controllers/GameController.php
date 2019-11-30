<?php 

namespace App\Controllers;

use MNT\Controller;

class GameController extends Controller
{
    private $amount_dozens;
    private $total_games;
    private $games;

    public function __construct($amount_dozens, $total_games)
    {
        $this->setAmount_dozens($amount_dozens);
        $this->setTotal_games($total_games);
    }

    public function getAmount_dozens()
    {
        return $this->amount_dozens;
    }

    public function getTotal_games()
    {
        return $this->total_games;
    }


    public function getGames()
    {
        return $this->games;
    }

    public function setAmount_dozens($amount_dozens)
    {
        $this->amount_dozens = $amount_dozens;

        return $this;
    }

    public function setTotal_games($total_games)
    {
        $this->total_games = $total_games;

        return $this;
    }

    public function setGames($games)
    {
        $this->games = $games;

        return $this;
    }

    private function genarateGames()
    {
        $numbers = range(1, 60);
        shuffle($numbers);
        $game = array_slice($numbers, 0, $this->getAmount_dozens());
        sort($game);
        return $game;
    }

    public function saveGames()
    {
        $games = [];
        for ($i = 0; $i < $this->getTotal_games(); $i++) {
            $games[$i] = $this->genarateGames();
        }
        $this->setGames($games);
    }
}