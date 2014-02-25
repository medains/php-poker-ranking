<?php

class PokerGame {
    public function __construct() {
    }

    public function getPlayers() {
        throw new Exception('Accessing model data');
        // returns an array of player ids
    }

    public function getHand($player) {
        throw new Exception('Accessing model data');
        // takes play id and returns a string representing the poker hand
    }
}
