<?php
/**
 * Created by PhpStorm.
 * User: Marchand
 * Date: 10/06/14
 * Time: 21:19
 */

namespace PHPoker;


class Dealer {

    private $game;

    public function __construct($game){
        $this->game = $game;
    }

    /*public function newRound()
    {
        $this->deck = new Deck($this->game->randomSeed);
        $this->distributeCards();
    }*/

    public function distributeCards(){
        $this->distributeCardsToPlayers();
        $this->distributeCard($this->getTable());
    }

    private function distributeCardsToPlayers(){
        foreach ($this->getPlayers() as $player) {
            $this->distributeCard($player);
        }
    }

    private function distributeCard($destination){
        $destination->hand[] = $this->getDeck()->getFirstCard();
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