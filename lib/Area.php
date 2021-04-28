<?php
namespace Lib;

 /**
 * --------------------------------------------------------------------------
 *  Area class
 * --------------------------------------------------------------------------
 *  a collection of class to solve a certain area.
 * 
 *  @author cjpanilag@gmail.com
 */
class Area
{

    /**
     * solving the area of a square
     * eqn: A = l * w * h
     * 
     * @param Float length
     * @param Float width
     * @param Float height
     * 
     * @return Float area
     */
    static function areaOfSquare(float $length, float $width, float $height): float
    {
        return ($length * $width * $height);
    }

}