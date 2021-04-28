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

    /**
     * solving the area of a triangle
     * eqn: A = 0.5(bh)
     * 
     * @param Flaot $base
     * @param Float $height
     * 
     * @return Float area
     */
    static function areaOfTriangle(float $base, float $height): float
    {
        return (.5 * ($base * $height));
    }

}