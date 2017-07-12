<?php

/**
 * BaseLeaveEntitlementType
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property integer $is_editable
 * @property Doctrine_Collection $LeaveEntitlement
 * @property Doctrine_Collection $LeaveAdjustment
 * 
 * @method integer              getId()               Returns the current record's "id" value
 * @method string               getName()             Returns the current record's "name" value
 * @method integer              getIsEditable()       Returns the current record's "is_editable" value
 * @method Doctrine_Collection  getLeaveEntitlement() Returns the current record's "LeaveEntitlement" collection
 * @method Doctrine_Collection  getLeaveAdjustment()  Returns the current record's "LeaveAdjustment" collection
 * @method LeaveEntitlementType setId()               Sets the current record's "id" value
 * @method LeaveEntitlementType setName()             Sets the current record's "name" value
 * @method LeaveEntitlementType setIsEditable()       Sets the current record's "is_editable" value
 * @method LeaveEntitlementType setLeaveEntitlement() Sets the current record's "LeaveEntitlement" collection
 * @method LeaveEntitlementType setLeaveAdjustment()  Sets the current record's "LeaveAdjustment" collection
 * 
 * @package    orangehrm
 * @subpackage model\leave\base
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLeaveEntitlementType extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_leave_entitlement_type');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('is_editable', 'integer', 1, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('LeaveEntitlement', array(
             'local' => 'id',
             'foreign' => 'entitlement_type'));

        $this->hasMany('LeaveAdjustment', array(
             'local' => 'id',
             'foreign' => 'adjustment_type'));
    }
}