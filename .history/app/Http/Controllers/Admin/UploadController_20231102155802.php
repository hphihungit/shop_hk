<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\UploadService;

class UploadController extends Controller
{
    protected $upload;

    public function __construct(UploadService $upload) {
        $this->upload = $upload;
    }

    public function store(Request $request) {
        Log::info('Request received'); // Thêm dòng này để log yêu cầu
        dd($request->file());
    }
}
