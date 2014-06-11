<?php
/**
 * Created by PhpStorm.
 * User: Marchand
 * Date: 10/06/14
 * Time: 21:19
 */

namespace PHPoker;


class Dealer {

    public $deck;
    public $hand; //cards on the table
    public $players;
    private $dealer_max_cards = 5;
    private $dealer_init_cards_num = 3;
    private $player_cards_num = 2;

    private function newDeck()
    {
        //calculates the latency...
        //$this->deck = new Deck($latency);
        srand(99999);
        $this->deck = new Deck(rand());
    }

    private function giveCards() //gives the cards to its own hand and to players hands
    {
        for($i = 0; $i < $this->player_cards_num; $i++)
        {
            foreach($this->players as $player)
            {
                $card = $this->deck->getFirstCard();
                $player->hand[$i] = $card;
            }
        }

        for($i = 0; $i < $this->dealer_init_cards_num; $i++)
        {
            $card = $this->deck->getFirstCard();
            $this->hand[$i] = $card;
        }
    }

    public function addDealerCard()
    {
        $arr_count = count($this->hand);
        if($arr_count < $this->dealer_max_cards)
        {
            $card = $this->deck->getFirstCard();
            $this->hand[$arr_count] = $card;
        }
    }

    public function newRound()
    {
        $this->newDeck();
        $this->giveCards();
    }
}