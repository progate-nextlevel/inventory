<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;
    protected $table = 'items';
    protected $primaryKey = 'id_item';


    protected $fillable = [
        'item_name','id_supplier','id_warehouse','id_rack','exp_date','id_status','barcode'
    ];

    public $timestamps = false;
}
