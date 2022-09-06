<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Racks extends Model
{
    use HasFactory;
    protected $table = 'racks';
    protected $primaryKey = 'id_rack';


    protected $fillable = [
        'size'
    ];

    public $timestamps = false;
}
