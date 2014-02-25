<?php

require( 'src/Poker.php' );

class PokerTest extends PHPUnit_Framework_TestCase {

    protected $fixture;

    public function setUp() {
        parent::setUp();
        $this->fixture = new Poker();
    }
    
    public function testGetWinnerReturnsString() {
        $this->assertTrue( is_string( $this->fixture->getWinnerString(1) ) );
    }

}
