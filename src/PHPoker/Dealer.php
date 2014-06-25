<?php
/**
 * Created by PhpStorm.
 * User: Marchand
 * Date: 10/06/14
 * Time: 21:19
 */

namespace PHPoker;


class Dealer {
    const TIMES_TO_SHUFFLE = 100;

    private $game;

    public function __construct($game){
        $this->game = $game;
    }

    public function shuffleCards($randomSeed){
        for ($i = 0; $i <= Dealer::TIMES_TO_SHUFFLE; $i++) {
            $actual_time = microtime(true);
            $avg = ($actual_time + $randomSeed)/2;
            $seed = ($randomSeed + $actual_time*$avg)/$avg;
            srand($seed);
            shuffle($this->game->deck->cards);
        }
    }

    // 2 cards per player, 3 cards on the table
    public function distributeCards(){
        $this->distributeCardsToPlayers();
        $this->distributeCardsToPlayers();
        $this->distributeCard($this->getTable());
        $this->distributeCard($this->getTable());
        $this->distributeCard($this->getTable());
    }

    private function distributeCardsToPlayers(){
        foreach ($this->getPlayers() as $player) {
            $this->distributeCard($player);
        }
    }

    private function distributeCard($destination){
        $destination->cards[] = $this->getDeck()->getFirstCard();
    }

    private function getDeck(){
        return $this->game->deck;
    }

    private function getTable(){
        return $this->game->table;
    }

    private function getPlayers(){
        return $this->game->players;
    }
}