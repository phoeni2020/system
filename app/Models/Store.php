<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable =['name','address','is_full'];

    public function species(){
        return $this->hasMany(Species::class,'id');
    }
}
