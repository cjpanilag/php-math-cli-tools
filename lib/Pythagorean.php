<?php
namespace Lib;

/**
 * --------------------------------------------------------------------------
 *  Pythagorean class
 * --------------------------------------------------------------------------
 *  solving the pythagoeran hypotenose of a perfect triangle.
 *  eqn: c² = a² + b²
 * 
 *  @author cjpanilag@gmail.com
 */
class Pythagorean
{
    private $a;
    private $b;
    private $c;

    public function __construct(float $a, float $b) 
    {
        $this->a = $a;
        $this->b = $b;
    }

    /**
     * output result 
     * 
     * @return Float | c = hypotenose
     */
    public function getResult(): float 
    {
        $this->a = $this->squared($this->a);
        $this->b = $this->squared($this->b);
        $this->c = sqrt($this->add());
        return $this->c;
    }

    /**
     * getting the squared of the term
     * 
     * @param Float | term
     * @return Float | the product of the term
     */
    private function squared(float $value): float 
    {
        return ($value * $value);
    }

    /**
     * adding both terms
     * 
     * @return Float | the sum of both terms
     */
    private function add(): float 
    {
        return ($this->a + $this->b);
    }
}
