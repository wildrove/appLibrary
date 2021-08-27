<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\PhotoUser;

class PhotoRemoveController extends Controller
{
    public function removePhoto(Request $request, $photo)
    {
        $photo = $request->all();

        dd($photo);
    }
}
