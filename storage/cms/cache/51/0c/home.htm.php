<?php 
class Cms5e0ecf32623fd658174826_ce7f8e57264065e75d64f22397acd785Class extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
