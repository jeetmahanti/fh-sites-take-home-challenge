<?php
// Jeet Mahanti - Test - 03/05/2019
namespace PokerHand;

use PHPUnit\Framework\TestCase;

// play the hand
$hands_array[0] = "As Ks Qs Js 10s";
$hands_array[1] = "Ah As 10c 7d 6s";
$hands_array[2] = "Kh Kc 3s 3h 2d";
$hands_array[3] = "Kh Qh 6h 2h 9h";
$hands_array[4] = "Jc 10c 9c 8c 7c";
$hands_array[5] = "5c 5h 5d 5s Ah";
$hands_array[6] = "6s 6h 6d Kc Kh";
$hands_array[7] = "10d 9h 8c 7s 6c";
$hands_array[8] = "Qd Qc Qs 7s 6c";
$hands_array[9] = "Kh Qh 7s 4s 3h";

// loop through and check
foreach ($hands_array as $key=>$val)  {
	$class_pokerhandclass = new PokerHand($val);
	$type = $class_pokerhandclass->getRank();
	print "Congratulations!! You rolled a ".$val." \n and that gives you a ".$type."\n\n";
}


// class poker hand test
class PokerHandTest extends TestCase
{
    /**
     * @test
     */
    public function itCanRankARoyalFlush()
    {
       $hand = new PokerHand('As Ks Qs Js 10s');
       $this->assertEquals('Royal Flush', $hand->getRank());		
    }

    /**
     * @test
     */
    public function itCanRankAPair()
    {
		
        $hand = new PokerHand('Ah As 10c 7d 6s');
        $this->assertEquals('One Pair', $hand->getRank());
    }

    /**
     * @test
     */
    public function itCanRankTwoPair()
    {
        $hand = new PokerHand('Kh Kc 3s 3h 2d');
        $this->assertEquals('Two Pair', $hand->getRank());
    }

    /**
     * @test
     */
    public function itCanRankAFlush()
    {
        $hand = new PokerHand('Kh Qh 6h 2h 9h');
        $this->assertEquals('Flush', $hand->getRank());
    }

    /**
     * @test
     */	
    public function itCanRankAStraightFlush()
    {
        $hand = new PokerHand('Jc 10c 9c 8c 7c');
        $this->assertEquals('Straight Flush', $hand->getRank());
    }		

    /**
     * @test
     */
    public function itCanRankAFourOfAKind()
    {
        $hand = new PokerHand('5c 5h 5d 5s Ah');
        $this->assertEquals('Four Of A Kind', $hand->getRank());
    }		
    /**
     * @test
     */	
    public function itCanRankAFullHouse()
    {
        $hand = new PokerHand('6s 6h 6d Kc Kh');
        $this->assertEquals('Full House', $hand->getRank());
    }	

	/**
     * @test
     */
	public function itCanRankAStraight()
    {
        $hand = new PokerHand('10d 9h 8c 7s 6c');
        $this->assertEquals('Straight', $hand->getRank());
    }	

	/**
     * @test
     */
	public function itCanRankAThreeOfAKind()
    {
        $hand = new PokerHand('Qd Qc Qs 7s 6c');
        $this->assertEquals('Three of a Kind', $hand->getRank());
    }	
	
    /**
     * @test
     */	
	public function itCanRankAHighCard()
    {
        $hand = new PokerHand('Kh Qh 7s 4s 3h');
        $this->assertEquals('High Card', $hand->getRank());
    }			
	
}