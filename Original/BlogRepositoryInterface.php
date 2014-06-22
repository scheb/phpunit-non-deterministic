<?php
namespace Original;

/**
 * This interface is just there to get the example working
 */
interface BlogRepositoryInterface
{
    /**
     * Get all blog posts from repository
     *
     * @return array of \Original\BlogPost
     */
    public function getBlogPosts();
}
