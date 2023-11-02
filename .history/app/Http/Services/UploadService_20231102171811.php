<?php
namespace App\Http\Services;

class UploadService {
    public function store($request) {
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('uploads');

            dd($path);
        }
    }
}
?>