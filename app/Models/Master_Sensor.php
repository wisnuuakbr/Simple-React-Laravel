<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Master_Sensor extends Model
{
    use HasFactory;
    // for customing name in indonesian name
    protected $table = 'master_sensor';
    // fill the db
    protected $fillable = [
        'sensor', 'sensor_name', 'unit', 'created_by', 'created_at', 'deleted_at',
    ];
    // excepting the updated at
    public $timestamps = false;

}