<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers'; // ?
    protected $fillable = [
        'name',
        'phone',
        'address',
        'email',
        'content'
    ];

    public function carts()
    {
        // hàm hasMany để mô tả mqh
        // customer_id -> khóa ngoại]
        return $this->hasMany(Cart::class, 'customer_id', 'id');
    }

    
    public function links()
    {
        return $this->paginate(15)->links();
    }
}
