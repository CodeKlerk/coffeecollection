<?php

/**
 *
 * @author Codeklerk
 */
class CoffeeCollection {

    function __construct() {
        
    }

// global variables
    public $Days;
    public $Farmers;
    public $Bags;

    function addFarmer() {
        // gets the number of farmers and adds 1
        $Farmers = ($this->getFarmers()) + 1;
        return $Farmers;
    }

    function removeFarmer() {
        // gets the number of farmers and removes 1
        $Farmers = ($this->getFarmers()) - 1;
        return $Farmers;
    }

    function printFarmers() {
        // Iteration of all farmers printing their numbers
        $n = $this->getFarmers();
        echo 'Farmers in the village ';
        while ($n > 0) {
            echo $n . ', ';
            $n--;
        }
        echo '<br />';
    }

    function giveBags($currentFarmer, $Days) {
        # Function to give bags. Accepts parameter $CurrentFarmer who is the farmer receiving bags currently

        $t = $this->getDays(); // $t is the loop for days after which they all give bags
        $b = $this->getBags(); // $b is the number of bags each farmer gives after every t days
        $n = $this->getFarmers(); // $n is the number of farmers in the village

        if ($currentFarmer > $n) {
            die("Current Farmer Parameter out of range"); // constraint to check whether $currentFarmer is an existing farmer
        }

        $previousFarmer = ($currentFarmer > 1) ? ($currentFarmer - 1) : $n; //value of previousFarmer. subracts 1 if CurrentFarmer is not 1
        $nextFarmer = ($currentFarmer < $n) ? ($currentFarmer + 1) : 1; //value of assign nextFarmer. adds 1 if CurrentFarmer is not $n(number of farmers)

        echo "Farmer receiving bags currently is  " . $currentFarmer . '<br />';
        echo "Previous Farmer " . $previousFarmer . '<br />';
        echo "Next Farmer " . $nextFarmer . '<br />';

        $farmer = $Days % $n;
        $farmer = ($farmer == 0) ? ($n) : $farmer;

        echo $Days . " days from now, it will be Farmer number " . $farmer . "'s turn to receive bags";
    }

    function setFarmers($Farmer) {
        //setter for $Farmers
        $this->Farmers = $Farmer;
    }

    function getFarmers() {
        //getter for $Farmers
        $Farmers = $this->Farmers;
        return $Farmers;
    }

    function setBags($Bags) {
        //setter for $Bags
        $this->Bags = $Bags;
    }

    function getBags() {
        //getter for $Bags
        $Bags = $this->Bags;
        return $Bags;
    }

    function setDays($Days) {
        //setter for $Days
        $this->Days = $Days;
    }

    function getDays() {
        //getter for $Days
        $Days = $this->Days;
        return $Days;
    }

}

?>