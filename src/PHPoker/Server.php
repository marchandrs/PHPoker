<?php
/**
 * Created by PhpStorm.
 * User: Marchand
 * Date: 10/06/14
 * Time: 21:28
 */

namespace PHPoker;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;


class Server implements MessageComponentInterface {

    protected $clients;

    public function __construct() {
        $this->clients = array();
    }

    public function onOpen(ConnectionInterface $conn) {

    }

    public function onMessage(ConnectionInterface $from, $msg) {
        //json_decode($msg);
        $from->resourceId;
    }

    public function onClose(ConnectionInterface $conn) {
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
    }

} 