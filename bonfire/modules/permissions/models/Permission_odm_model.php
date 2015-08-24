<?php

defined('BASEPATH') || exit('No direct script access allowed');

/**
 * ODM Permissions
 *
 * Provides a simple and consistent way to record and display user-related
 * activities in both core and custom modules.
 *
 * @package    Bonfire\Modules\Permissions\Models\Permission_odm_model
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
    
    /**
     * Check whether a permission is in the system.
     *
     * @param string $permission The name of the permission to check.
     *
     * @return boolean true if the permission was found, null if no permission was
     * passed, else false.
     */
    public function permission_exists($permission = null)
    {
        if (empty($permission)) {
            return null;
        }

        if ($this->find_by('name', $permission)) {
            return true;
        }

        return false;
    }    
}

/* /permission/models/permission_odm_model.php */
