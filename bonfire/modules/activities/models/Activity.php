<?php

namespace bonfire\modules\activities\models;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/** @MongoDB\Document(collection="activity") */
class Activity
{
    /** @MongoDB\Id */
    public $id;

    /** @MongoDB\ReferenceOne(targetDocument="bonfire\modules\users\models\User", simple=true) */
    public $user;

    //store username also... in case $user ref is deleted.
    /** @MongoDB\String */
    public $username;
    
    /** @MongoDB\String */
    public $activity;

    /** @MongoDB\String */
    public $module;

    /** @MongoDB\String(nullable=true) */
    public $object_id = null;

    //Pluginjob.ecp_cf_deploy
    
    /** @MongoDB\String(nullable=true) */
    public $object_model = null;

    //Old Document data
    /** @MongoDB\String(nullable=true) */
    public $document_o = null;

    //New Document data
    /** @MongoDB\String(nullable=true) */
    public $document_n = null;

    /** @MongoDB\Date */
    public $created_on;

    /** @MongoDB\Date(nullable=true) */
    public $deleted = null;

}

//create index: db.activity.createIndex( { created_on: 1 } )