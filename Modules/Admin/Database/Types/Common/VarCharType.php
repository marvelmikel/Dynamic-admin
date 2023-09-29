<?php

namespace Modules\Admin\Database\Types\Common;

use Doctrine\DBAL\Types\StringType as DoctrineStringType;

class VarCharType extends DoctrineStringType
{
    public const NAME = 'varchar';

    public function getName()
    {
        return static::NAME;
    }
}
