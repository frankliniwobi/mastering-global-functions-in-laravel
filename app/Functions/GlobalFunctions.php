<?php

use App\Models\User;

function users_count()
{
    return User::count();
}