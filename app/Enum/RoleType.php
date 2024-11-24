<?php

namespace App\Enum;

enum RoleType: string
{
    case ADMIN = 'admin';
    case CASHIER = 'Cashier';
    case  VISITOR = 'visitor';
}
