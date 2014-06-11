<?php
/**
 * Created by PhpStorm.
 * User: Marchand
 * Date: 10/06/14
 * Time: 21:13
 */

namespace PHPoker;


class Deck {

    public $cards;
    private $initialShuffledCards; //to be logged

    public function __construct($seedToShuffle) {
        for($i = 0; $i < 4; $i++)
        {
            for($j = 0; $j < 13; $j++)
            {
                $card = new Card();
                switch($i)
                {
                    case 0:
                        $card->nype = "Clubs";
                        break;
                    case 1:
                        $card->nype = "Hearts";
                        break;
                    case 2:
                        $card->nype = "Spades";
                        break;
                    case 3:
                        $card->nype = "Diamonds";
                        break;
                }
                $card->value = $j+2;
                $this->cards[13*$i+$j] = $card;
            }
        }
        $this->randomize($seedToShuffle);
        $this->initialShuffledCards = $this->cards; //copies the randomized cards to the other array
    }

    public function getFirstCard()
    {
        return array_shift($this->cards);
    }

    private function randomize($value)
    {
        $actual_time = microtime(true); //gets the actual time as float
        $avg = ($actual_time + $value)/2;
        $seed = ($value + $actual_time*$avg)/$avg;
        srand($seed);
        shuffle($this->cards);
    }

} 