<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hardware extends Model
{
    use HasFactory;
    // softdelete
    // use SoftDeletes;
    // for customing name without s
    protected $table = 'hardware';
    // fill the db
    protected $fillable = [
        'hardware',
        'location',
        'timezone',
        'local_time',
        'latitude',
        'longitude',
        'created_by',
        'created_at',
    ];
    // excepting the updated_at
    public $timestamps = false;
}