<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    use HasFactory;
    protected $fillable =['name','qty_no','qty_weight','price','price_all'];
    public function store(){
        return $this->belongsTo(Store::class,'id','store');
    }
}
