<?php
/*
$Suits = array('Hearts', 'Clubs', 'Diamonds', 'Spades');
$Numbers = array('1', '2', '3', '4', '5', '6', '7', '8', '9', 'Joker', 'Queen', 'King');

$Deck = array();

foreach ($Numbers as $number){
echo $number;
}
//var_dump($Suit);
//var_dump($Numbers); */
/*$Suits = array('Hearts', 'Clubs', 'Diamonds', 'Spades');
$Numbers = array('1', '2', '3', '4', '5', '6', '7', '8', '9', 'Jack', 'Queen', 'King');
$value = rand(0, 11);
$suitVal = rand(0, 3);
*/

/*function Draw() { 
$Suits = array('Hearts', 'Clubs', 'Diamonds', 'Spades');
$Numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 'Jack', 'Queen', 'King');

$numberVal = rand(0, 11);
$number = $Numbers[$numberVal];

$suitVal = rand(0, 3);
$suit = $Suits[$suitVal];

echo "The dealer draws $number of $suit.\n"; 

$card = new Card();
$card->number = $number;
$card->suit = $suit;
var_dump ($card);
}

Draw();

//draw 2 cards instead of 1, add $values up
//$calledCards = array()
//Need to write code that states for each $number $suit pair, store it in an array called $calledCards[]; 
/* foreach $number & $suit pair {

*/

//echo "This is the $number and $suit pair. \n";

class Card { 
	public $number;
	public $suit;
}
class Deck {
//	const number of
	public $cards = array();
	function addCard(Card $card){
		var_dump($card);
	}
}
class DeckFactory {
	function createDeck(){
		$deck = new Deck();
		$suits = array('Hearts', 'Clubs', 'Diamonds', 'Spades');
		$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 'Jack', 'Queen', 'King');
		foreach ($numbers as $number){
			foreach ($suits as $suit){
				$card = new Card();
				$card->number = $number;
				$card->suit = $suit;
				$deck->addCard($card);
			}
		}
	}
}

$DF = new DeckFactory();
$DF->createDeck();
//Create a class called card, 2 properties number and suit
//Draw function creates a card obj of class card and set number and suit
//return obj Card 
//Card = Draw
