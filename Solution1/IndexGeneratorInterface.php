<?php
namespace Solution1;

/**
 * The interface defines the logic on an abstract level
 */
interface IndexGeneratorInterface
{

    /**
     * Get random post number
     *
     * @param integer $max
     * @return integer
     */
    public function getRandomIndex($max);

}
