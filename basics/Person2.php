<?php
class Personn {
    public $name;
    public $age;

    public function birthday() {
        $this->age++;
        echo $this->name . " is now " . $this->age . "\n";
    }
}

$john = new Personn();
$john->name = "Kanafly";
$john->age = 37;
$john->birthday();

$mary = new Personn();
$mary->name = "Rahman Chea";
$mary->age = 33;
$mary->birthday();
?>
