<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\PhotoUser;
use Illuminate\Support\Facades\Auth;

class PhotoRemoveController extends Controller
{
    public function removePhoto(Request $request)
    {
        dd($request->all());

        $photo = $request->all('photoName');
        $photo = implode(" ", $photo);
        $photoUser = PhotoUser::where('image', $photo);
        $user = $photoUser->first()->user_id;

      if(Storage::disk('public')->exists($photo)){
        Storage::disk('public')->delete($photo);
      }

      $photoUser->delete();

      flash('Imagem Removida com Sucesso !')->success();

      return redirect()->route('admin.users.edit', ['user' => $user]);
    }
}
