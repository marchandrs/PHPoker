<?php
/**
 * Created by PhpStorm.
 * User: Marchand
 * Date: 10/06/14
 * Time: 21:13
 */

namespace PHPoker;


class Deck {

    const CARDS_PER_SUIT_COUNT = 13;

    public $cards = array();
    private $initialShuffledCards; // shuffled cards, log util

    public function __construct($seedToShuffle) {
        array_merge($this->cards, $this->getCardsFromSuit(Suit::CLUBS_SUIT));
        array_merge($this->cards, $this->getCardsFromSuit(Suit::DIAMONDS_SUIT));
        array_merge($this->cards, $this->getCardsFromSuit(Suit::HEARTS_SUIT));
        array_merge($this->cards, $this->getCardsFromSuit(Suit::SPADES_SUIT));
        $this->randomize($seedToShuffle, 100);
        $this->initialShuffledCards = $this->cards; // copies the randomized cards to other array
    }

    public function getFirstCard()
    {
        return array_shift($this->cards);
    }

    private function randomize($randomSeed, $timesToShuffle)
    {
        for ($i = 0; $i <= $timesToShuffle; $i++) {
            $actual_time = microtime(true); //gets the actual time as float
            $avg = ($actual_time + $randomSeed)/2;
            $seed = ($randomSeed + $actual_time*$avg)/$avg;
            srand($seed);
            shuffle($this->cards);
        }
    }

    private function getCardsFromSuit($suit){
        for($i = 0; $i < Deck::CARDS_PER_SUIT_COUNT; $i++){
            $card = new Card();
            $card->suit = Suit::getSuitName($suit);
            $card->value = $i + 2; //Poker card value starts with 2
            $cards[] = $card;
        }
        return $cards;
    }

} 