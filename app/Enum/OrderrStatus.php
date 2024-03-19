<?php

namespace App\Enum;

class OrderStatus
{
    public const PENDING                 = 1;
    public const INSTALLING              = 2;
    public const ACTIVE                  = 3;
    public const INACTIVE                = 5;
    public const DELETED                 = 7;
    public const COMPLETED               = 9;
    public const CANCELLED               = 10;
}