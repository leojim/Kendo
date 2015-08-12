<?php
namespace Kendo\Operation;
use Kendo\Definition\OperationDefinitionSet;

/**
 * Pre-defined common operations with default labels.
 */
class GeneralOperation implements OperationDefinitionSet
{
    // const ALL    = 1 | 1 << 2 | 1 << 3 | 1 << 4 | 1 << 5; // 11111
    const ALL    = 61;
    const CREATE = 1;       // 00001
    const UPDATE = 2; // 1 << 2;  // 00010
    const DELETE = 4; // 1 << 3;  // 00100
    const VIEW   = 8; // 1 << 4;  // 01000
    const SEARCH = 16; // 1 << 5;  // 10000

    public function export()
    {
        return [
            self::ALL    => 'All',
            self::CREATE => 'Create',
            self::UPDATE => 'Update',
            self::DELETE => 'Delete',
            self::VIEW   => 'View',
            self::SEARCH => 'Search',
        ];
    }
}


