<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenis extends Model
{
    protected $table = "tb_tenis";
    protected $primaryKey = "cd_tenis";
    protected $connection = "mysql";
    public $timestamps = false;
}
