<?php

namespace App\Controllers;

use MNT\Controller;

class RaffleController extends Controller
{
    private $result;

    public function getResult()
    {
        return $this->result;
    }

    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    public function index()
    {
        $total_games = $_POST['total_games'];
        $amount_dozens = $_POST['amount_dozens'];

        $player_result = $this->action($amount_dozens, $total_games);
        $this->view(['player_result' => $player_result, 'raffle_result' => $this->getResult()]);
    }

    private function action($amount_dozens, $total_games)
    {
        $mygame = new \App\Controllers\GameController($amount_dozens, $total_games);
        $mygame->saveGames();
        $this->raffle();
        $result_check = $this->check($mygame->getGames());
        $mygame->setGames($result_check);
        return $mygame->getGames();
    }

    private function check($games)
    {
        $total = 0;
        foreach ($games as $key => $game) {
            $total = array_filter($game, function($number){
                return in_array($number, $this->getResult());
            });
            $result_check[$key] = [
                'game' => $game,
                'hits' => count($total)
            ];
        }
        return $result_check;
    }

    private function raffle()
    {
        $numbers = range(1, 60);
        shuffle($numbers);
        $result = array_slice($numbers, 0, 6);
        sort($result);
        $this->setResult($result);
    }
}
