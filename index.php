<?php
/**
 * Created by PhpStorm.
 * User: Marchand
 * Date: 10/06/14
 * Time: 23:21
 */
    require_once "Dealer.php";
    require_once "Player.php";
    require_once "Deck.php";
    require_once "Card.php";


    $dealer = new \PHPoker\Dealer();
    $dealer->players[0] = new \PHPoker\Player();
    $dealer->players[0]->name = "P1";
    $dealer->players[1] = new \PHPoker\Player();
    $dealer->players[1]->name = "P2";
    $dealer->players[2] = new \PHPoker\Player();
    $dealer->players[2]->name = "P3";
    $dealer->newRound();

    echo "DEALER HAND <BR>";
    var_dump($dealer->hand);
    echo "<p></p>";

    echo "DEALER REST OF DECK <BR>";
    var_dump($dealer->deck->cards);
    echo "<p></p>";

    foreach($dealer->players as $player)
    {
        echo "PLAYER NAME: ".$player->name."<br>";
        var_dump($player->hand);
        echo "<p></p>";
    }