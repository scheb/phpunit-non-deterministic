<?php
namespace Solution2;

use Original\BlogRepositoryInterface;

class BlogManager
{
    /**
     * @var \Original\BlogRepositoryInterface
     */
    private $repository;

    /**
     * @param \Original\BlogRepositoryInterface $repository
     */
    public function __construct(BlogRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Get a random blog post
     *
     * @return \Original\BlogPost
     */
    public function getRandomPost()
    {
        $allPosts = $this->repository->getBlogPosts();
        $randomIndex = $this->getRandomIndex(count($allPosts) - 1);
        return $allPosts[$randomIndex];
    }

    /**
     * Get random post number
     *
     * @param integer $max
     * @return integer
     */
    protected function getRandomIndex($max)
    {
        return mt_rand(0, $max);
    }
}
