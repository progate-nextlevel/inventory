<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statuses extends Model
{
    use HasFactory;
    protected $table = 'statuses';
    protected $primaryKey = 'id_status';


    protected $fillable = [
        'status'
    ];

    public $timestamps = false;
}
