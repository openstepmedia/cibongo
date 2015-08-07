<?php

namespace bonfire\modules\users\models;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/** @MongoDB\Document(collection="bf_users") */
class User
{
    /** @MongoDB\Id */
    public $id;

    /** @MongoDB\String */
    public $email;
    
    /** @MongoDB\String */
    public $username;
    
    /** @MongoDB\String */
    public $password_hash;
    
    /** @MongoDB\String */
    public $reset_hash;

    /** @MongoDB\String */
    public $last_ip;

    /** @MongoDB\Int */
    public $banned;

    /** @MongoDB\String */
    public $ban_message;

    /** @MongoDB\String */
    public $display_name;

    /** @MongoDB\String */
    public $display_name_changed;

    /** @MongoDB\String */
    public $timezone;

    /** @MongoDB\String */
    public $language;

    /** @MongoDB\Int */
    public $active;
    
    /** @MongoDB\String */
    public $activate_hash;

    /** @MongoDB\Int */
    public $force_password_reset = 0;
    
    /** @MongoDB\ReferenceOne(targetDocument="bonfire\modules\roles\models\Role", simple=true) */
    public $role;
    
    /** @MongoDB\String */
    public $auth_backend;

    /** @MongoDB\Raw */
    public $cookies;
    
    /** contains array of login_attempts **/
    /** @MongoDB\Raw */
    public $login_attempts = array();
    
    /** contains array user metadata **/
    /** @MongoDB\Raw */
    public $meta = array();
    
    /** @MongoDB\Date */
    public $last_login;
    
    /** @MongoDB\Date */
    public $created_on;
    
    /** @MongoDB\Date(nullable=true) */
    public $deleted = null;
}
