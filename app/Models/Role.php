<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    public $table = 'roles';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'role_name',
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    // Relations

    public function detail_user()
    {
        return $this->hasMany('App\Models\DetailUser', 'role_id');
    }
}
