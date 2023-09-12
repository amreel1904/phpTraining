<?php
class Card {
    private $rank;
    private $suit;

    public function __construct($rank, $suit) {
        $this->rank = $rank;
        $this->suit = $suit;
    }

    public function __toString() {
        return $this->rank . $this->suit;
    }
}

$aceClubs = new Card("A", '♣');
echo $aceClubs . "\n";

$tenDiamond = new Card("K", '♦');
echo $tenDiamond . "\n";

$tenDiamond = new Card("J", '♥️');
echo $tenDiamond . "\n";

$oneDot = new Card("2", '♠️');
echo $oneDot . "\n"; // No Exception, but it will display "1."
?>
