<?php

namespace App\Enum;

enum RoleEnum: string
{
    case DEVELOPER = 'Developer';
    case ADMINISTRATOR = 'Administrator';
    case USER = 'User';
}
