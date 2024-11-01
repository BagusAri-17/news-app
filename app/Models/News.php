<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;

    public $table = 'news';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'user_id',
        'category_id',
        'location_id',
        'title',
        'content',
        'thumbnail',
        'image',
        'updated_at',
        'created_at',
        'deleted_at',
    ];
}
