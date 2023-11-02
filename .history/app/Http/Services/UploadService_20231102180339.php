<?php
namespace App\Http\Services;

class UploadService {
    public function store($request) {
        if ($request->hasFile('file')) {
            try {
                $name = $request->file('file')->getClientOriginalName();

                $pathFull = 'uploads/' . date("Y/m/d");
    
                $request->file('file')->storeAs(
                    'public/' . $pathFull , $name
                );
                
                $link = '/storage/' . $pathFull . '/' . $name;
                return $link;
            } catch (\Exception $err) {
                return false;
            }
        }
    }
}
?>