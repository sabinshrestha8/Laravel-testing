<?php

namespace App\Code;

class CodingChallenge
{   
    /**
     * Create a function that returns the product of all odd integers in an array.
     */
    function oddProduct($numbers) {
        $oddNumbers = array_filter($numbers, function($number) {
            return $number % 2 == 1;
        });
            
        $oddProduct = 1;
        
        foreach($oddNumbers as $oddNum) {
            $oddProduct *= $oddNum; 
        }
        
        return $oddProduct;
    }    

    /**
     * Create a function that takes a number as an argument,
     * increments the number by +1 and returns the result.
     */
    function addition($num) {
        return $num + 1;
    }

    /**
     * Create a function that takes an array of hurdle heights and a jumper's jump
     * height, and determine whether or not the hurdler can clear all the hurdles.
     * A hurdler can clear a hurdle if their jump height is greater than or equal
     * to the hurdle height. Note: Return true for the edge case of an empty array of
     * hurdles. (Zero hurdles means that any jump height can clear them).
     */
    function hurdleJump($hurdles, $jumpHeight) {
        if (empty($hurdles)) return true; // no hurdles, jump always possible

        // get the maximum hurdle height from hurdles array
        $maxHurdleHeight = max($hurdles);

        // return $jumpHeight >= $maxHurdleHeight; // shorthand way of returning boolean value
        if($jumpHeight >= $maxHurdleHeight) {
            return true;
        }
        return false;
    }

    /**
     * Create a function that takes an array of items, removes all
     * duplicate items and returns a new array in the same sequential
     * order as the old array (minus duplicates).
     */
    function removeDups($arr) {
        $noDuplicate = array_unique($arr);  // remove duplicate values from array

        return array_values($noDuplicate);
    }
}