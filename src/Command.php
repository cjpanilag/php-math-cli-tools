<?php
namespace Src;

 /**
 * --------------------------------------------------------------------------
 *  Command class
 * --------------------------------------------------------------------------
 *  driver code to run commands
 * 
 *  @author cjpanilag@gmail.com
 */
class Command 
{
    /**
     * list of command message
     */
    private static $coms = "
    *---------------------------------------------------------------------------------------------*
    |                                                                                             |
    |                                 M a t h     C o m m a n d s                                 |
    |                                                                                             |
    *---------------------------------------------------------------------------------------------*
    |   php index.php pythagorean   args1 args2             |  args1: float (required)            |
    |                                                       |  args2: float (required)            |
    |---------------------------------------------------------------------------------------------|
    |   php index.php areaOfSquare  args1 args2             |  args1: float lenght (required)     |
    |                                                       |  args2: float width  (required)     |
    |---------------------------------------------------------------------------------------------|
    |   php index.php areaOfTriangle   args1 args2          |  args1: float base    (required)    |
    |                                                       |  args2: float height  (required)    |
    *---------------------------------------------------------------------------------------------*
    \n";

    /**
     * list of valid help commands
     */
    private static $com_list = ['-h', '--help'];

    /**
     * driver code to check and run help command
     * 
     * @param Argv system args
     * @return Message 
     */
    static function run($argv) 
    {
        if ($argv === self::$com_list[0] || $argv === self::$com_list[1]) {
            return self::$coms;
        }
        else {
            return "\033[31m invalid command \033[0m\n";
        }
    }  
}

