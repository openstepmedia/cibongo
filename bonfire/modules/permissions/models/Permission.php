<?php
namespace bonfire\modules\permissions\models;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/** @MongoDB\Document(collection="permission") */
class Permission
{
    /** @MongoDB\Id */
    public $id;

    /** @MongoDB\String */
    public $name;
    
    /** @MongoDB\String */
    public $description;
    
    /** @MongoDB\String */
    public $status;
 
}
