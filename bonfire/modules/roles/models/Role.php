<?php

namespace bonfire\modules\roles\models;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/** @MongoDB\Document(collection="role") */
class Role
{
    /** @MongoDB\Id */
    public $id;

    /** @MongoDB\String */
    public $role_name;
    
    /** @MongoDB\String */
    public $description;
    
    /** @MongoDB\Int */
    public $default = 0;

    /** @MongoDB\Int */
    public $can_delete = 0;

    /** @MongoDB\String */
    public $login_destination;

    /** @MongoDB\String */
    public $default_context = 'content';

    /** @MongoDB\ReferenceMany(targetDocument="bonfire\modules\permissions\models\Permission", simple=true) */
    public $role_permissions = array();  
    
    /** @MongoDB\Date(nullable=true) */
    public $deleted = null;

    /**
     * Used by the Permissions module for cleaning up deleted permission records
     * 
     * @param \Documents\Permission $permission
     * @param \Doctrine\ODM\MongoDB\DocumentManager $dm
     */
    public function deletePermission(\bonfire\modules\permissions\models\Permission $permission) {
        $new_permission = array();
        foreach($this->permission as $perm) {
            if(!($permission->id == $perm->id)) {
                $new_permission[] = $perm;
            }
        }
        $this->permission = $new_permission;
    }   
    
    public function hasPermission($permission_id) {
        foreach($this->role_permissions as $perm) {
            if($perm->id == $permission_id) {
                return true;
            }
        }
        return false;
    }
    
    
   
}
