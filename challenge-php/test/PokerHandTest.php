<?php
// Jeet Mahanti - Test - 03/05/2019
namespace PokerHand;

use PHPUnit\Framework\TestCase;

class PokerHandTest extends TestCase {
// adam - more custom code at the bottom
	var $args = null;
    /**
     * @test
     */
    public function itCanRankARoyalFlush()
    {
       $hand = new PokerHand($this->args);
       return $this->assertEquals('Royal Flush', $hand->getRank());		
    }
	
    /**
     * @test
     */
    public function itCanRankATwoPair()
    {
        $hand = new PokerHand($this->args);
        $this->assertEquals('Two Pair', $hand->getRank());
    }	
	
    public function itCanRankAPair()
    {
		
        $hand = new PokerHand($this->args);
        $this->assertEquals('One Pair', $hand->getRank());
    }	
	
    /**
     * @test
     */
    public function itCanRankAFlush()
    {
        $hand = new PokerHand($this->args);
        $this->assertEquals('Flush', $hand->getRank());
    }	
	

	    /**
     * @test
     */	
    public function itCanRankAStraightFlush()
    {
        $hand = new PokerHand($this->args);
        $this->assertEquals('Straight Flush', $hand->getRank());
    }	
	
	/**
     * @test
     */
	public function itCanRankAStraight()
    {
        $hand = new PokerHand($this->args);
        $this->assertEquals('Straight', $hand->getRank());
    }	
	
	/**
     * @test
     */
	public function itCanRankAThreeOfAKind()
    {
        $hand = new PokerHand($this->args);
        $this->assertEquals('Three of a Kind', $hand->getRank());
    }	

    /**
     * @test
     */	
	public function itCanRankAHighCard()
    {
        $hand = new PokerHand($this->args);
        $this->assertEquals('High Card', $hand->getRank());
    }	
	
    /**
     * @test
     */
    public function itCanRankAFourOfAKind()
    {
        $hand = new PokerHand($this->args);
        $this->assertEquals('Four Of A Kind', $hand->getRank());
    }	

	    /**
     * @test
     */	
    public function itCanRankAFullHouse()
    {
        $hand = new PokerHand($this->args);
        $this->assertEquals('Full House', $hand->getRank());
    }	

	
	
}

$class=new PokerHandTest();
$class->args = "As Ks Qs Js 10s";
$var = $class->itCanRankARoyalFlush();
if (!$var) {
	print "You rolled a Royal Flush\n";
} else {
	null;
}

$class->args = "Kh Kc 3s 3h 2d";
$var = $class->itCanRankATwoPair();
if (!$var) {
	print "You rolled a Two Pair\n";
} else {
    null;	
}

$class->args = "Ah As 10c 7d 6s";
$var = $class->itCanRankAPair();
if (!$var) {
	print "You rolled a One Pair\n";
} else {
    null;	
}

$class->args = "Kh Qh 6h 2h 9h";
$var = $class->itCanRankAFlush();	
if (!$var) {
	print "You rolled a Flush\n";
} else {
    null;	
}

$class->args = "Jc 10c 9c 8c 7c";
$var = $class->itCanRankAStraightFlush();
if (!$var) {
	print "You rolled a Straight Flush\n";
} else {
    null;	
}

$class->args = "5c 5h 5d 5s Ah";
$var = $class->itCanRankAFourOfAKind();
if (!$var) {
	print "You Rolled a Four Of A Kind\n";
} else {
    null;	
}

$class->args = "6s 6h 6d Kc Kh";
$var = $class->itCanRankAFullHouse();
if (!$var) {
	print "You Rolled a Full House\n";
} else {
    null;	
}

$class->args = "10d 9h 8c 7s 6c";
$var = $class->itCanRankAStraight();
if (!$var) {
	print "You Rolled a Straight\n";
} else {
    null;	
}


$class->args = "Kh Qh 7s 4s 3h";
$var = $class->itCanRankAHighCard();
if (!$var) {
	print "You Rolled a High Card\n";
} else {
    null;	
}	

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

die();
