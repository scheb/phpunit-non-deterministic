<?php
namespace Tests\Solution2;

use Original\BlogPost;

class BlogManagerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Array of blog posts
     * @var array
     */
    private $posts;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $repository;

    /**
     * @var \Tests\Solution2\TestableBlogManager
     */
    private $blogManager;

    public function setUp()
    {
        $this->posts = array(
            new BlogPost(1),
            new BlogPost(2),
            new BlogPost(3),
        );

        $this->repository = $this->getMock("Original\BlogRepositoryInterface");
        $this->repository
            ->expects($this->any())
            ->method("getBlogPosts")
            ->will($this->returnValue($this->posts));

        $this->blogManager = new TestableBlogManager($this->repository);
    }

    /**
     * @test
     * @dataProvider getIndexToTest
     */
    public function getRandomPost_returnsRandomPost($randomIndex)
    {
        $this->blogManager->randomIndex = $randomIndex; //Set the random index to be returned

        $returnValue = $this->blogManager->getRandomPost();
        $this->assertEquals($this->posts[$randomIndex], $returnValue);
    }

    public function getIndexToTest()
    {
        return array(
            array(0),
            array(1),
            array(2),
        );
    }
}