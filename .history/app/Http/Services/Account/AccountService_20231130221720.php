<?php

namespace App\Http\Services\Account;
use App\Models\User;

class AccountService {
    public function getAccounts() {
        return User::orderbyDesc('id')->paginate(20);
    }
}