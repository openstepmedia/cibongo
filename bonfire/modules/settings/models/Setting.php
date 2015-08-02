<?php

namespace bonfire\modules\settings\models;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/** @MongoDB\Document(collection="setting") */
class Setting
{
    /** @MongoDB\Id */
    public $id;

    /** @MongoDB\String */
    public $name;
    
    /** @MongoDB\String */
    public $module;
    
    /** @MongoDB\String */
    public $value;      
}
