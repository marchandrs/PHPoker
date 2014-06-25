<?php
/**
 * Created by PhpStorm.
 * User: Marchand
 * Date: 10/06/14
 * Time: 23:21
 */

/*
 *  VAR_DUMP FILE, DEV TEST STUFF GOES HERE
 */
	
	require 'vendor\autoload.php';

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