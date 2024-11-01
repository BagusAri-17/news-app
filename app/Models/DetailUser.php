<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    use SoftDeletes;

    public $table = 'detail_users';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'user_id',
        'role_id',
        'photo_profile',
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    // Relations

    // One to One
    public function user()
    {
        return $this->belongsTo('App/Models/User', 'user_id', 'id');
    }
    public function role()
    {
        return $this->belongsTo('App/Models/Role', 'role_id', 'id');
    }
}
