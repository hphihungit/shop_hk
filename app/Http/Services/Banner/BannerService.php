<?php


namespace App\Http\Services\Banner;

use App\Models\Banner;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class BannerService
{
    public function show()
    {
        return Banner::select('picture')
            ->orderbyDesc('id')
            ->get();
    }
}
