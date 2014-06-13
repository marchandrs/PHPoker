<?php
/**
 * Created by PhpStorm.
 * User: Marchand
 * Date: 10/06/14
 * Time: 23:21
 */
    require_once "Table.php";
    require_once "Game.php";
    require_once "Dealer.php";
    require_once "Player.php";
    require_once "Suit.php";
    require_once "Deck.php";
    require_once "Card.php";


    $game = new \PHPoker\Game();
    $game->newGame();

    $player = new \PHPoker\Player();
    $player->name = "P1";
    $game->addPlayer($player);

    $player = new \PHPoker\Player();
    $player->name = "P2";
    $game->addPlayer($player);

    $player = new \PHPoker\Player();
    $player->name = "P3";
    $game->addPlayer($player);

    $game->newRound();

    var_dump($game);