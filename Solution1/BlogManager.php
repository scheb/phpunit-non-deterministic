<?php
namespace Solution1;

use Original\BlogRepositoryInterface;

/**
 * Solution 1: Non-deterministic login capsulated into a seperate class
 */
class BlogManager
{
    /**
     * @var \Original\BlogRepositoryInterface
     */
    private $repository;

    /**
     * @var \Solution1\IndexGeneratorInterface
     */
    private $indexGenerator;

    /**
     * @param \Original\BlogRepositoryInterface $repository
     * @param \Solution1\IndexGeneratorInterface $indexGenerator
     */
    public function __construct(BlogRepositoryInterface $repository, IndexGeneratorInterface $indexGenerator)
    {
        $this->repository = $repository;
        $this->indexGenerator = $indexGenerator;
    }

    /**
     * Get a random blog post
     *
     * @return \Original\BlogPost
     */
    public function getRandomPost()
    {
        $allPosts = $this->repository->getBlogPosts();
        $randomIndex = $this->indexGenerator->getRandomIndex(count($allPosts) - 1);
        return $allPosts[$randomIndex];
    }
}
