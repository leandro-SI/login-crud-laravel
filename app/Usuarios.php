<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contract\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Usuarios extends Model implements AuthenticatableContract
{
    use Authenticatable;
    public $table ="usuarios";
}
