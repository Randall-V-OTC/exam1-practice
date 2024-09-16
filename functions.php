<?php

// a function to create an associative array containing key value pairs in a string format
    function funFacts() {

        // an array to hold each Pokemon and it's type
        $data = [
            "Pikachu" => "Electric",
            "Squirtle" => "Water",
            "Bulbasaur" => "Leaf",
            "Charmander" => "Fire"
        ];

        // print the above array
        foreach ($data as $pokemon => $type) {
            echo("$pokemon is a $type Pokemon.<br />");
        }

        // return a string so we can echo out the amount of entries that exist in the array
        return "There are " . count($data) . " Pokemon in the array.";

    }

    // a function to calculate the interest paid on a load
    function interestPaid($loanAmt, $termLength, $interestPercentage) {

        //$newPerc = $interestPercentage / 100;
        $calc = $loanAmt * $interestPercentage * $termLength / 100;

        return "For a loan of $" . $loanAmt . " dollars over " . $termLength
         . " years with an interest rate of " . $interestPercentage
          . "%, you will pay a total amount of $" . $calc . " in intrest.";

    }