<?php
class AwekInfoV2 {
    private $negeri;
    private $kerja;
    private $umur;
    private $hobby;
    private $relationshipStatus;
    private $phoneNumber;
    private $address;
    private $email;
    private $favoriteFood;
    private $favoriteColor;

    public function getNegeri() {
        return $this->negeri;
    }

    public function setNegeri($negeri) {
        $this->negeri = $negeri;
    }

    public function getKerja() {
        return $this->kerja;
    }

    public function setKerja($kerja) {
        $this->kerja = $kerja;
    }

    public function getUmur() {
        return $this->umur;
    }

    public function setUmur($umur) {
        $this->umur = $umur;
    }

    public function getHobby() {
        return $this->hobby;
    }

    public function setHobby($hobby) {
        $this->hobby = $hobby;
    }

    public function getRelationshipStatus() {
        return $this->relationshipStatus;
    }

    public function setRelationshipStatus($relationshipStatus) {
        $this->relationshipStatus = $relationshipStatus;
    }

    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    public function setPhoneNumber($phoneNumber) {
        $this->phoneNumber = $phoneNumber;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getFavoriteFood() {
        return $this->favoriteFood;
    }

    public function setFavoriteFood($favoriteFood) {
        $this->favoriteFood = $favoriteFood;
    }

    public function getFavoriteColor() {
        return $this->favoriteColor;
    }

    public function setFavoriteColor($favoriteColor) {
        $this->favoriteColor = $favoriteColor;
    }

    public function __toString() {
        return sprintf(
            "Negeri: %s\nKerja: %s\nUmur: %d\nHobby: %s\nRelationship Status: %s\nPhone Number: %s\nAddress: %s\nEmail: %s\nFavorite Food: %s\nFavorite Color: %s",
            $this->negeri, $this->kerja, $this->umur, $this->hobby, $this->relationshipStatus, $this->phoneNumber,
            $this->address, $this->email, $this->favoriteFood, $this->favoriteColor
        );
    }
}

$awek = new AwekInfoV2();

echo "Enter negeri: ";
$negeri = readline();
$awek->setNegeri($negeri);

echo "Enter kerja: ";
$kerja = readline();
$awek->setKerja($kerja);

echo "Enter umur: ";
$umur = intval(readline());
$awek->setUmur($umur);

echo "Enter hobby: ";
$hobby = readline();
$awek->setHobby($hobby);

echo "Enter relationship status: ";
$relationshipStatus = readline();
$awek->setRelationshipStatus($relationshipStatus);

echo "Enter phone number: ";
$phoneNumber = readline();
$awek->setPhoneNumber($phoneNumber);

echo "Enter address: ";
$address = readline();
$awek->setAddress($address);

echo "Enter email: ";
$email = readline();
$awek->setEmail($email);

echo "Enter favorite food: ";
$favoriteFood = readline();
$awek->setFavoriteFood($favoriteFood);

echo "Enter favorite color: ";
$favoriteColor = readline();
$awek->setFavoriteColor($favoriteColor);

echo $awek;
?>
