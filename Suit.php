<?php
/**
 * Created by PhpStorm.
 * User: Marchand
 * Date: 11/06/14
 * Time: 23:20
 */

namespace PHPoker;


class Suit {

    const CLUBS_SUIT = 0;
    const HEARTS_SUIT = 1;
    const SPADES_SUIT = 2;
    const DIAMONDS_SUIT = 3;

    public static function getSuitName($suit){
        switch ($suit){
            case self::CLUBS_SUIT:
                return "clubs";
                break;
            case self::HEARTS_SUIT:
                return "Hearts";
                break;
            case self::SPADES_SUIT:
                return "Spades";
                break;
            case self::DIAMONDS_SUIT:
                return "Diamonds";
                break;
        }
    }

} 