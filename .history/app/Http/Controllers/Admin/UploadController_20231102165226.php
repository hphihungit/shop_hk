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

    public function store(Request $request)
    {
        // Kiểm tra xem yêu cầu có chứa file không
        if ($request->hasFile('file')) {
            // Lấy thông tin về file
            $file = $request->file('file');
            
            // Thực hiện các xử lý bạn muốn với file ở đây

            // Ví dụ: Lưu file vào thư mục public/uploads và trả về đường dẫn
            $path = $file->store('uploads', 'public');

            // Trả về kết quả dưới dạng JSON
            return response()->json(['path' => $path]);
        } else {
            // Nếu không có file, trả về thông báo lỗi
            return response()->json(['error' => 'No file uploaded.'], 400);
        }
    }
}
