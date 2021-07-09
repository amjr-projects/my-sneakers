<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = "tb_usuario";
    protected $primaryKey = "cd_usuario";
    protected $connection = "mysql";
    public $timestamps = false;
}
