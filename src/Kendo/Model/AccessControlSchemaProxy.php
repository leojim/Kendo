<?php
/**
 * THIS FILE IS AUTO-GENERATED BY LAZYRECORD,
 * PLEASE DO NOT MODIFY THIS FILE DIRECTLY.
 * 
 * Last Modified: June 29th at 2:05pm
 */
namespace Kendo\Model;


use LazyRecord;
use LazyRecord\Schema\RuntimeSchema;
use LazyRecord\Schema\Relationship;

class AccessControlSchemaProxy extends RuntimeSchema
{

    public static $column_names = array (
  0 => 'role',
  1 => 'rule_id',
  2 => 'allow',
  3 => 'id',
);
    public static $column_hash = array (
  'role' => 1,
  'rule_id' => 1,
  'allow' => 1,
  'id' => 1,
);
    public static $mixin_classes = array (
);
    public static $column_names_include_virtual = array (
  0 => 'role',
  1 => 'rule_id',
  2 => 'allow',
  3 => 'id',
);

    const schema_class = 'Kendo\\Model\\AccessControlSchema';
    const collection_class = 'Kendo\\Model\\AccessControlCollection';
    const model_class = 'Kendo\\Model\\AccessControl';
    const model_name = 'AccessControl';
    const model_namespace = 'Kendo\\Model';
    const primary_key = 'id';
    const table = 'access_controls';
    const label = 'AccessControl';

    public function __construct()
    {
        /** columns might have closure, so it can not be const */
        $this->columnData      = array( 
  'role' => array( 
      'name' => 'role',
      'attributes' => array( 
          'isa' => 'str',
          'type' => 'varchar',
          'primary' => NULL,
          'length' => 32,
        ),
    ),
  'rule_id' => array( 
      'name' => 'rule_id',
      'attributes' => array( 
          'isa' => 'int',
          'type' => 'int',
          'primary' => NULL,
        ),
    ),
  'allow' => array( 
      'name' => 'allow',
      'attributes' => array( 
          'isa' => 'bool',
          'type' => 'boolean',
          'primary' => NULL,
          'default' => false,
        ),
    ),
  'id' => array( 
      'name' => 'id',
      'attributes' => array( 
          'isa' => 'int',
          'type' => 'int',
          'primary' => true,
          'autoIncrement' => true,
        ),
    ),
);
        $this->columnNames     = array( 
  'id',
  'role',
  'rule_id',
  'allow',
);
        $this->primaryKey      = 'id';
        $this->table           = 'access_controls';
        $this->modelClass      = 'Kendo\\Model\\AccessControl';
        $this->collectionClass = 'Kendo\\Model\\AccessControlCollection';
        $this->label           = 'AccessControl';
        $this->relations       = array( 
  'rule' => \LazyRecord\Schema\Relationship::__set_state(array( 
  'data' => array( 
      'type' => 3,
      'self_schema' => 'Kendo\\Model\\AccessControlSchema',
      'self_column' => 'rule_id',
      'foreign_schema' => 'Kendo\\Model\\AccessRuleSchema',
      'foreign_column' => 'id',
    ),
  'accessor' => 'rule',
  'where' => NULL,
  'orderBy' => array( 
    ),
)),
);
        $this->readSourceId    = 'default';
        $this->writeSourceId    = 'default';
        parent::__construct();
    }


    /**
     * Code block for message id parser.
     */
    private function __() {
        _('AccessControl');
    }

}
