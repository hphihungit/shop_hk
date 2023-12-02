<?php

namespace App\Http\Services\Account;
use App\Models\User;

class AccountService {
    public function getAccounts() {
        return User::orderbyAsc('id')->paginate(20);
    }
}