<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'parent_id',
        'description',
        'content',
        'active'
    ];

<<<<<<< HEAD
    public function products()
    {
=======
    public function products() {
>>>>>>> c016dd6b3b9838dc91c71f81378d2d99edd00594
        return $this->hasMany(Product::class, 'menu_id', 'id');
    }
}
