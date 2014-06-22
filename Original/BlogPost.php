<?php
namespace Original;

/**
 * This class is just there to get the example working
 */
class BlogPost
{
    //May have even more attributes, doesn't matter for this demo...
    public $id;
    public $title;
    public $content;

    /**
     * @param integer $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }
}
