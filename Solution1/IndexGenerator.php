<?php
namespace Solution1;

/**
 * The implementation which is used in production
 */
class IndexGenerator implements IndexGeneratorInterface
{
    /**
     * Get random post number
     *
     * @param integer $max
     * @return integer
     */
    public function getRandomIndex($max)
    {
        return mt_rand(0, $max);
    }
}
