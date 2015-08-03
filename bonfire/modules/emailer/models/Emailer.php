<?php

namespace bonfire\modules\emailer\models;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/** @MongoDB\Document(collection="email_queue") */
class Emailer
{
    /** @MongoDB\Id */
    public $id;

    /** @MongoDB\String */
    public $to_email;
    
    /** @MongoDB\String */
    public $subject;
    
    /** @MongoDB\String */
    public $message;
    
    /** @MongoDB\String */
    public $alt_message;

    /** @MongoDB\Int */
    public $max_attempts;

    /** @MongoDB\Int */
    public $attempts;

    /** @MongoDB\Int */
    public $success;

    /** @MongoDB\Date */
    public $date_published;

    /** @MongoDB\Date */
    public $last_attempt;

    /** @MongoDB\Date */
    public $date_sent;

    /** @MongoDB\String */
    public $csv_attachment;
}
