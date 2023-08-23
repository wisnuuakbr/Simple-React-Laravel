<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HardwareDetail extends Model
{
    use HasFactory;
    // for customing name without s
    protected $table = 'hardware_detail';
    // fill the db
    protected $fillable = [
        'hardware_id',
        'sensor',
    ];
    // excepting the updated_at
    public $timestamps = false;
}