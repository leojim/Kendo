<?php
use Kendo\SecurityPolicy\RBACSecurityPolicySchema;

class MockUser
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }
}

class FooSecurityPolicy extends RBACSecurityPolicySchema
{
    public function schema()
    {
        $this->actor('user', 'User')
            ->roles('admin', 'user', 'customer');

        /*
        $this->rule()
            ->roles(['admin', 'user'])
            ->can(['CREATE', 'UPDATE'], 'book')
            ;

        $this->rule()
            ->roles('admin', 'user')
            ->can(['CREATE', 'UPDATE'], 'book')
            ;

        $user1 = new MockUser(1);
        $user2 = new MockUser(2);

        $this->rule()
            ->users($user1, $user2)
            ->can(['CREATE', 'UPDATE'], 'book')
            ;

        $this->rule()
            ->users([$user1])
            ->can(['CREATE', 'UPDATE'], 'book')
            ;
         */
    }
}

class RBACSecurityPolicySchemaTest extends PHPUnit_Framework_TestCase
{
    public function testSchema()
    {
        $definition = new FooSecurityPolicy();
        $definition->schema();
    }
}

