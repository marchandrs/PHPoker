<?php
/**
 * Created by PhpStorm.
 * User: Marchand
 * Date: 10/06/14
 * Time: 21:13
 */

namespace PHPoker;


class Game {

    public $randomSeed;

    public $players;
    public $deck;
    public $dealer;
    public $table;

    public function newGame(){
        $this->dealer = new Dealer($this);
        $this->table = new Table();
    }

    public function addPlayer($player){
        $this->players[] = $player;
    }

    public function newRound(){
        $this->deck = new Deck();
        $this->dealer->ShuffleCards($this->randomSeed); // TO DO: Dealer should shuffle cards
        $this->dealer->distributeCards();
    }

} 