<?php
// Jeet Mahanti - Test - 03/05/2019
namespace PokerHand;

use PHPUnit\Framework\TestCase;

// play the hand
$hands_array["As Ks Qs Js 10s"] = "Royal Flush";
$hands_array["Ah As 10c 7d 6s"] = "One Pair";
$hands_array["Kh Kc 3s 3h 2d"] = "Two Pair";
$hands_array["Kh Qh 6h 2h 9h"] = "Flush";
$hands_array["Jc 10c 9c 8c 7c"] = "Straight Flush";
$hands_array["5c 5h 5d 5s Ah"] = "Four Of A Kind";
$hands_array["6s 6h 6d Kc Kh"] = "Full House";
$hands_array["10d 9h 8c 7s 6c"] = "Straight";
$hands_array["Qd Qc Qs 7s 6c"] = "Three Of A Kind";
$hands_array["Kh Qh 7s 4s 3h"] = "High Card";


foreach ($hands_array as $key=>$val)  {
	$class_pokerhandclass = new PokerHand($key);
	$rolled = $class_pokerhandclass->input;
	if ($rolled == $key) {
		print "Congratulations!! You rolled a ".$key." \n and that gives you a ".$val."\n\n";
	}
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