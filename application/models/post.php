<?php
class Post extends Eloquent
{
    public function author()
    {
        return $this->belongs_to('User', 'author_id');
    }

    public function wall()
    {
    	return $this->belongs_to('User','wall_id');
    }
}