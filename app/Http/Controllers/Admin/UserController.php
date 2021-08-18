<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \App\Models\User::paginate(10);

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {        
        $user = \App\Models\User::create($request->all());

        $userImages = $this->uploadedImage($request, 'image');

        $user->photos()->createMany($userImages);
        
        flash('Usuário Criado com Sucesso !')->success();
        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($user)
    {
        $user = \App\Models\User::find($user);

        return view('/admin/users/edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $user)
    {
        $data = $request->all();
        $user = \App\Models\User::find($user);
        $user->update($data);

        flash('Usuário Atualizado com Sucesso !')->success();
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user)
    {
        $user = \App\Models\User::find($user);
        $user->delete();

        flash('Usuário Removido com Sucesso !')->success();
        return redirect()->route('admin.users.index');
    }

    private function uploadedImage(Request $request, $userPhotoColumn)
    {
        if($request->hasFile('photos')){
            $images = $request->file('photos');
            
            $uploadedImages = [];

            foreach($images as $image){
                $uploadedImages[] = [$userPhotoColumn => $image->store('users', 'public')];
            }

            return $uploadedImages;
        }

        return false;
    }
}
