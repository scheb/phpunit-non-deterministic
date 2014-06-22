<?php
namespace Original;

/**
 * Original non-deterministic implementation of the BlogManager
 */
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
        $randomIndex = mt_rand(0, count($allPosts) - 1);
        return $allPosts[$randomIndex];
    }
}
