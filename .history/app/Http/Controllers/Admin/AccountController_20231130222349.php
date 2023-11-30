<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Account\AccountService;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    protected $accountService;

    public function __construct(AccountService $accountService) {
        $this->accountService = $accountService;
    }

    public function show() {
        return view('admin.accounts.list', [
            'title' => 'Danh Sách User',
            'accounts' => $this->accountService->getAccounts(),
        ]);
    }
}
