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
     * eqn: A = l * w 
     * 
     * @param Float length
     * @param Float width
     * 
     * @return Float area
     */
    static function areaOfSquare(float $length, float $width): float
    {
        return ($length * $width);
    }

}