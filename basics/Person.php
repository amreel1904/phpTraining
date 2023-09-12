<?php
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function birthday() {
        $this->age++;
        echo $this->name . " is now " . $this->age . "\n";
    }
}

$amreel = new Person("Amreel", 24);
$amreel->birthday();
?>
