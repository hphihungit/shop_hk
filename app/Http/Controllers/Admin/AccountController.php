<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Account\AccountService;
use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    protected $accountService;

    public function __construct(AccountService $accountService)
    {
        $this->accountService = $accountService;
    }

    public function show()
    {
        return view('admin.accounts.list', [
            'title' => 'Edit User Account',
            'accounts' => $this->accountService->getAccounts(),
        ]);
    }
    public function showedit(User $user)
    {
        return view('admin.accounts.edit', [
            'title' => 'Chỉnh Sửa Danh Mục: ' . $user->name,
            'user' => $user,
        ]);
    }
    public function delete(Request $request)
    {
        $result = $this->accountService->delete($request);

        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công Slider'
            ]);
        }

        return redirect()->back();
    }
    public function update(User $user, Request $request)
    {
        $result = $this->accountService->update($request, $user);

        if ($result) {
            return redirect('admin/products/list');
        }

        return redirect()->back();
    }
}
