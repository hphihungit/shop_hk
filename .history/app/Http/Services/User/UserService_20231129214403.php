<?php

namespace App\Http\Services\User;

use App\Models\User;

class UserService {
    
    public function getUser() {
        return User::orderByDesc('id')->paginate(15);
    }
}