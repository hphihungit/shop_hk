<?php

namespace App\Http\Services\Account;

class AccountService {
    public function getAccounts() {
        return User::orderbyDesc('id')->paginate(20);
    }
}