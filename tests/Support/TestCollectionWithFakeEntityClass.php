<?php

namespace Jasny\Support;

use Jasny\EntityCollection\AbstractEntityCollection;

/**
 * @ignore
 */
class TestCollectionWithFakeEntityClass extends AbstractEntityCollection
{
    public $entityClass = 'Foo';
}
