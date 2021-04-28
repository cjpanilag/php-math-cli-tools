<?php
namespace Lib;

include 'Pythagorean.php';
include 'Area.php';

use Lib\Pythagorean;
use Lib\Area;

/**
 * --------------------------------------------------------------------------
 *  Math class
 * --------------------------------------------------------------------------
 *  collection of all math classes.
 * 
 *  @author cjpanilag@gmail.com
 */
class Math 
{
    /**
     * @param Integer | a : the leg of A side
     * @param Integer | b : the leg of B side
     * 
     * @return Float | result : the hypotenose of the triangle
     */
    static function pythagorean(float $a, float $b) 
    {
        $pyth = new Pythagorean($a, $b);
        return $pyth->getResult();
    }

    /**
     * @param Float length
     * @param Float width
     * @param Float hight
     * 
     * @return Float area
     */
    static function areaOfSquare($length, $width, $height)
    {
        return Area::areaOfSquare($length, $width, $height);
    }
}