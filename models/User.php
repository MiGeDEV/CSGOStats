<?php
/**
 * Created by PhpStorm.
 * CSGOStats
 * Author: Milli
 * Time: 19-12-2015 | 04:10 PM
 * File: User.php
 */

namespace ITGC\MySQL;


/**
 * Class User
 * @package ITGC\MySQL
 */
class User
{
    /**
     * @var
     */
    public $userid;


    /**
     * User constructor.
     * @param $userid
     */
    public function __construct($userid)
    {
        $this->userid = $userid;
    }

    /**
     *
     */
    public function steamID()
    {

    }
}