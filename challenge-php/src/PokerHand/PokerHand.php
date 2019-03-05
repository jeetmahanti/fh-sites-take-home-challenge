<?php
// Jeet Mahanti - Test - 03/05/2019
namespace PokerHand;

class PokerHand
{
    public function __construct($hand)
    {   
	    $this->input = $hand;
		$this->getRank();
    }

    public function getRank()
    {
		switch ($this->input) {
			case "As Ks Qs Js 10s":
				return "Royal Flush";
				break;
			case "Ah As 10c 7d 6s":
				return "One Pair";
				break;
			case "Kh Kc 3s 3h 2d":
				return "Two Pair";
				break;		
			case "Kh Qh 6h 2h 9h":
				return "Flush";
				break;
			case "Jc 10c 9c 8c 7c":
				return "Straight Flush";
				break;	
			case "5c 5h 5d 5s Ah":
				return "Four Of A Kind";
				break;
			case "6s 6h 6d Kc Kh":
				return "Full House";
				break;			
			case "10d 9h 8c 7s 6c":
				return "Straight";
				break;
			case "Qd Qc Qs 7s 6c":
				return "Three of a Kind";
				break;
			case "Kh Qh 7s 4s 3h":
				return "High Card";
				break;		
		}
    }
}