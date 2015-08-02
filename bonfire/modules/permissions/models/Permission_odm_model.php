<?php

defined('BASEPATH') || exit('No direct script access allowed');

/**
 * Bonfire
 *
 * An open source project to allow developers to jumpstart their development of
 * CodeIgniter applications
 *
 * @package   Bonfire
 * @author    Bonfire Dev Team
 * @copyright Copyright (c) 2011 - 2014, Bonfire Dev Team
 * @license   http://opensource.org/licenses/MIT
 * @link      http://cibonfire.com
 * @since     Version 1.0
 * @filesource
 */

/**
 * Activities
 *
 * Provides a simple and consistent way to record and display user-related
 * activities in both core and custom modules.
 *
 * @package    Bonfire\Modules\Activities\Models\Activity_model
 * @author     Bonfire Dev Team
 * @link       http://cibonfire.com/docs/activities
 *
 */
class Permission_odm_model extends BF_ODM_Model {

    protected $repository = 'bonfire\modules\permissions\models\Permission';
    
    /**
     * @var bool Whether to use soft deletes
     */
    protected $soft_deletes = true;

    /**
     * @var string The date format to use
     */
    protected $date_format = 'datetime';

    /**
     * @var bool Set the created time automatically on a new record
     */
    protected $set_created = true;

    /**
     * @var bool Set the modified time automatically on editing a record
     */
    protected $set_modified = false;

    //--------------------------------------------------------------------

    public function __construct()
    {
        parent::__construct();

        $this->lang->load('activities/activities');
    }

    /**
     * Return all activities created by one or more modules.
     *
     * @param string[]|string $modules Module name(s)
     *
     * @return bool/array An array of activity objects, or false
     */
    public function find_by_module($modules = array())
    {
    }

    /**
     * Find the top modules
     *
     * @param Number $limit The number of modules to return
     *
     * @return Array    An array of results
     */
    public function findTopModules($limit = 5)
    {
    }

    /**
     * Find the top users
     *
     * @param Number $limit The number of users to return
     *
     * @return Array    An array of results
     */
    public function findTopUsers($limit = 5)
    {
    }

    /**
     * Log an activity.
     *
     * @param int    $user_id  An int id of the user that performed the activity.
     * @param string $activity A string detailing the activity. Max length of 255 chars.
     * @param string $module   The name of the module that set the activity.
     *
     * @return bool An int with the ID of the new object, or FALSE on failure.
     */
    public function log_activity($user_id = null, $activity = '', $module = 'any')
    {
    }
}

/* /activities/models/activity_model.php */
