<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Account\AccountService;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    protected AccountService $accountService;

    public function __construct($accountService) {
        $this->accountService = $accountService;
    }

    public function show() {
        return view('admin.accounts.list', [
            'title' => 'Danh Sách User',
            'accounts' => $this->accountService->getAccounts(),
        ]);
    }
}
