<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu_Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function menus(){

        return $this->hasMany(Menu::class,'category_id','id');
    }
}
