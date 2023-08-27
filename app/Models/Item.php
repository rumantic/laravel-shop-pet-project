<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $casts = [
        'sale' => 'boolean'
    ];

    public $guarded = [];
}