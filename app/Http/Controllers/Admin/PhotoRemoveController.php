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
      $photos = $request['photoName'];

      foreach ($photos as $photo) {
          $photoUser = PhotoUser::where('image', $photo);
          $user = $photoUser->first()->user_id;
          $photoUser->delete();
          $photo = 'users/' . $photo;

        if(Storage::disk('public')->exists($photo)){
            Storage::disk('public')->delete($photo);
          }

      }

      flash('Imagem Removida com Sucesso !')->success();

      return redirect()->route('admin.users.edit', ['user' => $user]);
    }
}
