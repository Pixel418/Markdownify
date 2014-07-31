<?php

/* This file is part of the Markdownify 3 project, which is under MIT license */

namespace Markdownify\NodeConverter;

class HeaderNodeConverter extends TextNodeConverter
{

    /* ATTRIBUTES
     *************************************************************************/
    protected $tagList = array('h1', 'h2', 'h3', 'h4', 'h5', 'h6');


    /* PROTECTED METHODS
     *************************************************************************/
    protected function initialization()
    {
        $prefix = str_repeat('#', $this->getHeaderLevel()).' ';
        $this->setPrefix($prefix);
        $this->setLineBreaks(2);
    }
    
    protected function getHeaderLevel()
    {
        return array_search($this->getTagName(), $this->tagList) + 1;
    }

}