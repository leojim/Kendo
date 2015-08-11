<?php
namespace Kendo\Model;
use LazyRecord\Schema\DeclareSchema;

class RoleSchema extends DeclareSchema
{
    public function schema() 
    {
        $this->column('actor_id')
            ->refer('Kendo\\Model\\ActorSchema')
            ->integer();

        // role identifier
        $this->column('identifier')
            ->varchar(32)
            ->required()
            ;

        $this->column('label')
            ->varchar(32)
            ->null()
            ;

        $this->column('description')
            ->text()
            ;

        $this->belongsTo('actor', 'Kendo\\Model\\RoleSchema', 'id', 'actor_id');
    }



}


