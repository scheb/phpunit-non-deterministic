<?php
namespace Tests\Solution2;

use Solution2\BlogManager;

class TestableBlogManager extends BlogManager
{
    /**
     * @var integer
     */
    public $randomIndex;

    /**
     * Get random post number
     *
     * @param integer $max
     * @return integer
     */
    function getRandomIndex($max)
    {
        return $this->randomIndex;
    }
}
