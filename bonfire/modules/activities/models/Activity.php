<?php

namespace bonfire\modules\activities\models;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/** @MongoDB\Document(collection="activity") */
class Activity
{
    /** @MongoDB\Id */
    public $id;

    /** @MongoDB\String */
    public $username;
    
    /** @MongoDB\String */
    public $action;
    
    /** @MongoDB\String */
    public $module;

    /** @MongoDB\String */
    public $object_id;

    //Pluginjob.ecp_cf_deploy
    
    /** @MongoDB\String */
    public $object_model;

    /** @MongoDB\String */
    public $message;

    //Old Document data
    /** @MongoDB\String */
    public $document_o;

    //New Document data
    /** @MongoDB\String */
    public $document_n;

    /** @MongoDB\Date */
    public $created;

    /** @MongoDB\Date */
    public $deleted = null;

}
