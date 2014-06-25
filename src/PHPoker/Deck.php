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

    public function __construct() {
        $this->cards = array_merge($this->cards, $this->getCardsFromSuit(Suit::CLUBS_SUIT));
        $this->cards = array_merge($this->cards, $this->getCardsFromSuit(Suit::DIAMONDS_SUIT));
        $this->cards = array_merge($this->cards, $this->getCardsFromSuit(Suit::HEARTS_SUIT));
        $this->cards = array_merge($this->cards, $this->getCardsFromSuit(Suit::SPADES_SUIT));
    }

    public function getFirstCard()
    {
        return array_shift($this->cards);
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