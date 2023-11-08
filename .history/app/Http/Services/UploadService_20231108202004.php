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
                
                $linkPic = '/storage/' . $pathFull . '/' . $name;
                return $linkPic;
            } catch (\Exception $err) {
                return false;
            }
        }
    }
}
?>