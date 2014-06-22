<?php
namespace Tests\Solution1;

use Solution1\IndexGeneratorInterface;

/**
 * The implementation which is used when testing
 */
class IndexGeneratorStub implements IndexGeneratorInterface
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
    public function getRandomIndex($max)
    {
        return $this->randomIndex;
    }
}
